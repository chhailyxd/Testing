<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
      public function index(){
        $deviceName = session('device_name');
        $os = session('os');
        return view('login',  compact('deviceName', 'os'));
    }
}
