<?php
declare(strict_types = 1);

namespace App\Services\Dashboard;

use App\Interfaces\OrderRepositoryInterface;

class OrderService
{
     public function __construct(protected OrderRepositoryInterface $orderRepository){}

}