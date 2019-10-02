<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Solution;
use Illuminate\Http\Request;

class ControllerSolutionItem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $solution;

    public function index($for, $name)
    {
        $solution = Solution::where('path', $for.'/'.$name)->first();
        //return $for.'/'.$name;
        return  $solution;
    }
}

