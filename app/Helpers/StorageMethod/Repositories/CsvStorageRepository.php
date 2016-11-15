<?php

namespace App\Helpers\StorageMethod\Repositories;

use League\Csv\Reader;

class CsvStorageRepository implements StorageRepository
{

    public function findByTrackingCode($code)
    {
        $reader = Reader::createFromPath(base_path() . '/database/csv/shippings.csv');
        $reader->addFilter(function ($row) use ($code) {
            return $code == $row[1];
        });
        $result = $reader->fetchOne(0);
        if ($result) {
            return (object) ['id' => $result[0], 'tracking_code' => $result[1], 'delivery_date' => $result[2]];
        } else {
            return null;
        }
    }
}
