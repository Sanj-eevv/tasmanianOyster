<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\Contact\ContactResource;
use App\Interfaces\ContactRepositoryInterface;
use App\Models\Front\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function __construct(protected ContactRepositoryInterface $contactRepository){}

     public function index(Request $request){
          if ($request->ajax()) {
               $columns = [
                     'full_name',
                     'phone_number',
                     'email',
                     'created_at',
               ];
               $meta = AppHelper::defaultTableInput([
                    'offset' => $request->input('start'),
                    'limit'  => $request->input('length') ?? '-1',
                    'order'  => $columns[$request->input('order.0.column')] ?? $columns[0],
                    'dir'    => $request->input('order.0.dir'),
                    'search' => $request->input('search.value'),
               ]);
               $resp = $this->contactRepository->paginatedWithQuery($meta);
               $resp['data'] = ContactResource::collection($resp['data']);
               $resp['draw'] = intval($request->input('draw'));
               return response()->json($resp);
          }
          return view('dashboard.contacts.index');
     }

     public function show(Contact $contact){
          return view('dashboard.contacts.show', compact('contact'));
     }

     public function destroy(Contact $contact){
          $this->contactRepository->delete($contact);
          return response()->json([
               'message' => 'Contact Successfully Deleted',
          ]);
     }
}