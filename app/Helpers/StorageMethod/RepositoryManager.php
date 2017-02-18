<?php

namespace App\Helpers\StorageMethod;

use App\Helpers\StorageMethod\Repositories\CsvStorageRepository;
use App\Helpers\StorageMethod\Repositories\EloquentStorageRepository;
use Illuminate\Support\Manager;

class RepositoryManager extends Manager
{
    protected function createEloquentRepositoryDriver()
    {
        return new EloquentStorageRepository();
    }

    protected function createCsvRepositoryDriver()
    {
        return new CsvStorageRepository();
    }

    public function getDefaultDriver()
    {
        if ($this->app['config']['storage.driver'] == 'csv') {
            return 'CsvRepository';
        }

        return 'EloquentRepository';
    }
}
