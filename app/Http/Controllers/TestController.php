<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){
        return 'Welcome Data';
    }

    public function check($name)
    {
      return $name;
    }
    //
}
