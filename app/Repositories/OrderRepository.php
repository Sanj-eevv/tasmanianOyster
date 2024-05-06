<?php
declare(strict_types = 1);

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Front\Contact;
use App\Models\Order;


class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{

    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function paginatedWithQuery(array $meta, $query = null ): array
    {
        $query = $this->model::query()
             ->select('orders.id', 'email', 'quantity', 'title', 'orders.created_at', 'j.title')
             ->join('john_reserves as j', 'j.id', 'orders.john_reserve_id')
             ->where('orders.id', 'like', $meta['search'].'%')
             ->orWhere('email', 'like', $meta['search'].'%')
             ->orWhere('quantity', 'like', $meta['search'].'%')
             ->orWhere('j.title', 'like', $meta['search'].'%')
             ->orWhere('orders.created_at', 'like', $meta['search'].'%');

        return $this->offsetAndSort($meta, $query);
    }


}
