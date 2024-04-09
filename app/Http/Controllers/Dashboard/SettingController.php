<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingRequest;
use App\Models\Setting;
use App\Services\Dashboard\SettingService;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
     public function __construct(protected SettingService $settingService){}

    public function index()
    {
         $all_settings = Setting::getCachedValue();
         return view('dashboard.settings.index', compact('all_settings'));
    }

    public function store(SettingRequest $request)
    {
         DB::transaction(function () use ($request)
         {
              $this->settingService->store($request->validated());
         });
         return redirect()->back()->with('alert.success', 'Setting Successfully Updated !!!');

    }

}
