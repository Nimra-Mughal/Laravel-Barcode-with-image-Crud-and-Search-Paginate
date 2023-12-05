<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;

class UserController extends Controller
{
    function welcome(){
        $data= product::all();
        $brand= brand::all();
        return view('welcome',compact('data','brand'));
    }
}
