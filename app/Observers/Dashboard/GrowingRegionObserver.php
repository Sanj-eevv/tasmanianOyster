<?php
declare(strict_types = 1);
namespace App\Observers\Dashboard;

use App\Models\GrowingRegion;
use Illuminate\Support\Facades\Cache;

class GrowingRegionObserver
{
    /**
     * Handle the Setting "created" event.
     */
    public function created(GrowingRegion $growingRegion): void
    {
         Cache::forget('growingRegion');
    }

    /**
     * Handle the Setting "updated" event.
     */
    public function updated(GrowingRegion $growingRegion): void
    {
         Cache::forget('growingRegion');
    }

    /**
     * Handle the Setting "deleted" event.
     */
    public function deleted(GrowingRegion $growingRegion): void
    {
         Cache::forget('growingRegion');
    }

    /**
     * Handle the Setting "restored" event.
     */
    public function restored(GrowingRegion $growingRegion): void
    {
         Cache::forget('growingRegion');
    }

    /**
     * Handle the Setting "force deleted" event.
     */
    public function forceDeleted(GrowingRegion $growingRegion): void
    {
         Cache::forget('growingRegion');
    }
}
