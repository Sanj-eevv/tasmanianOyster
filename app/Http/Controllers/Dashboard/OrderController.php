<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\Order\OrderResource;
use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use function Spatie\LaravelPdf\Support\pdf;

class OrderController extends Controller
{

     public function __construct(protected OrderRepositoryInterface $orderRepository){}

     public function index(Request $request){
          if ($request->ajax()) {
               $columns = [
                    'email',
                    'quantity',
                    'title',
                    'created_at',
               ];
               $meta = AppHelper::defaultTableInput([
                    'offset' => $request->input('start'),
                    'limit'  => $request->input('length') ?? '-1',
                    'order'  => $columns[$request->input('order.0.column')] ?? $columns[0],
                    'dir'    => $request->input('order.0.dir'),
                    'search' => $request->input('search.value'),
               ]);
               $resp = $this->orderRepository->paginatedWithQuery($meta);
               $resp['data'] = OrderResource::collection($resp['data']);
               $resp['draw'] = intval($request->input('draw'));
               return response()->json($resp);
          }
          return view('dashboard.orders.index');
     }

     public function show(Order $order){
          $order->load('johnReserve');
          return view('dashboard.orders.show', compact('order'));
     }

     public function destroy(Order $order){
          $this->orderRepository->delete($order);
          return response()->json([
               'message' => 'Order Successfully Deleted',
          ]);
     }
     public function generatePDf(Order $order){
          $name = "invoice-{$order->getAttribute('id')}".Carbon::now()->format('Y-m-d').".pdf";
          return pdf()
               ->view('mails.order-created', ['order' => $order])
               ->name($name)
               ->download();
     }
}
