<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dasboard extends Controller
{
     public function dashboard(){

             return view('backend.dashboard.home');
     }
}
