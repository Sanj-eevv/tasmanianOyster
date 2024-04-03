<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;

use App\Models\Front\Contact;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{

    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }


    public function paginatedWithQuery(array $meta, $query = null ): array
    {
        $query = Contact::query()
             ->select('id', 'full_name', 'phone_number', 'email', 'created_at')
             ->where('full_name', 'like', $meta['search'] . '%')
             ->orWhere('phone_number', 'like', $meta['search'] . '%')
             ->orWhere('email', 'like', $meta['search'] . '%')
             ->orWhere('created_at', 'like', $meta['search'] . '%');

        return $this->offsetAndSort($meta, $query);
    }


    public function delete(Model $modelObj): ?bool
    {
        if($modelObj->role->name === 'superAdmin' && auth()->user()->role->name !== 'superAdmin'){
            abort('404');
        }
        return $modelObj->delete();
    }


}
