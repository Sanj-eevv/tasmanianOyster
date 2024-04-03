<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Interfaces\ContactRepositoryInterface;
use App\Models\Front\Contact;

class ContactController extends Controller
{
     public function __construct(protected ContactRepositoryInterface $contactRepository){}

     public function store(ContactRequest $request){
          $this->contactRepository->store($request->validated());
          return redirect()->back()->with(['toast.success' => 'Contact Created Successfully !!!']);
     }
}