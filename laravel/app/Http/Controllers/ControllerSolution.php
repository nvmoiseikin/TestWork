<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Solution;
use Illuminate\Http\Request;

class ControllerSolution extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
protected $solution = [];

public function index()
{
    $solution[0] = Solution::where('for', 'Для дома')->get();
    $solution[1] = Solution::where('for', 'Для бизнеса')->get();
    //return $for.'/'.$name;
    return  $solution;
}
}
