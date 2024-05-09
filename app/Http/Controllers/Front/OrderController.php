<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Front;

use App\Events\OrderCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\OrderRequest;
use App\Interfaces\OrderRepositoryInterface;
use App\Models\JohnReserve;
use App\Models\Order;
use Illuminate\Support\Carbon;
use function Spatie\LaravelPdf\Support\pdf;

class OrderController extends Controller
{

     public function __construct(protected OrderRepositoryInterface $orderRepository){}

     public function index(){
          /*TODO:: ADD ACTIVE SCOPE */
          $johnReserves = JohnReserve::query()->where('is_active', 1)->get();
          return view('front.pages.order.index')->with(['johnReserves' => $johnReserves]);
     }


     public function store(OrderRequest $request){
          $order = $this->orderRepository->store($request->validated());
          OrderCreated::dispatch($order);
          return response()->json(['message' => 'Order Created Successfully']);
     }
}