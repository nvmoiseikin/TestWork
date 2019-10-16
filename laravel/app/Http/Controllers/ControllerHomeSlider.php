<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;

class ControllerHomeSlider extends Controller
{
    protected $solution;

    public function index()
    {
        $solution = HomeSlider::all();
        //return $for.'/'.$name;
        return  $solution;
    }
}
