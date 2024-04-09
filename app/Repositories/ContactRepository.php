<?php
declare(strict_types = 1);

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;

use App\Models\Front\Contact;


class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{

    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }


    public function paginatedWithQuery(array $meta, $query = null ): array
    {
        $query = $this->model::query()
             ->select('id', 'full_name', 'phone_number', 'email', 'created_at')
             ->where('full_name', 'like', $meta['search'] . '%')
             ->orWhere('phone_number', 'like', $meta['search'] . '%')
             ->orWhere('email', 'like', $meta['search'] . '%')
             ->orWhere('created_at', 'like', $meta['search'] . '%');

        return $this->offsetAndSort($meta, $query);
    }


}
