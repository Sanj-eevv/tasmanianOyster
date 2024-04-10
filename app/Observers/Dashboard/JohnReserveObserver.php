<?php
declare(strict_types = 1);
namespace App\Observers\Dashboard;

use App\Models\JohnReserve;
use Illuminate\Support\Facades\Cache;

class JohnReserveObserver
{
    /**
     * Handle the Setting "created" event.
     */
    public function created(JohnReserve $johnReserve): void
    {
         Cache::forget('johnReserve');
    }

    /**
     * Handle the Setting "updated" event.
     */
    public function updated(JohnReserve $johnReserve): void
    {
         Cache::forget('johnReserve');
    }

    /**
     * Handle the Setting "deleted" event.
     */
    public function deleted(JohnReserve $johnReserve): void
    {
         Cache::forget('johnReserve');
    }

    /**
     * Handle the Setting "restored" event.
     */
    public function restored(JohnReserve $johnReserve): void
    {
         Cache::forget('johnReserve');
    }

    /**
     * Handle the Setting "force deleted" event.
     */
    public function forceDeleted(JohnReserve $johnReserve): void
    {
         Cache::forget('johnReserve');
    }
}
