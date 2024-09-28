<?php

namespace App\Http\Controllers;

use App\Services\Auth\Service;

class AuthController extends Controller
{

    public $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }

}
