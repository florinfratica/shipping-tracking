<?php

namespace App\Helpers\StorageMethod\Repositories;

interface StorageRepository
{
    public function findByTrackingCode($code);
}
