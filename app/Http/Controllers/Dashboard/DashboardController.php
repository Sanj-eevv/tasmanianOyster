<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Helpers\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\Contact\ContactResource;
use App\Interfaces\ContactRepositoryInterface;
use App\Models\Front\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function __invoke(){
          return view('dashboard.index');
     }

}