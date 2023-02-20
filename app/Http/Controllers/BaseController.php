<?php

namespace App\Http\Controllers;

use App\Http\Service\Setting;

class BaseController extends Controller
{

    public $service;

    public function __construct(Setting $service)
    {
        $this->service = $service;
    }
}
