<?php

namespace App\Http\Controllers;

use App\Helpers\StorageMethod\Repositories\StorageRepository;
use Response;

class ShippingController extends Controller
{
    private $repository;

    public function __construct(StorageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show($code)
    {
        $result = $this->repository->findByTrackingCode($code);

        return Response::json(
            [
                'status' => 'success',
                'result' => (array) $result,
            ],
            200
        );
    }
}
