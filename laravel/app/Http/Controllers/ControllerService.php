<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ControllerService extends Controller
{
    protected $service;

    public function index()
    {
        $service = Service::all();
        //return $for.'/'.$name;
        return $service;
    } //
}


