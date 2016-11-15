<?php

namespace App\Helpers\StorageMethod\Repositories;

use App\Shipping;

class EloquentStorageRepository implements StorageRepository
{

    public function findByTrackingCode($code)
    {
        return Shipping::where('tracking_code', $code)->first();
    }
}
