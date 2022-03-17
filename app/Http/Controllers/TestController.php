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
public function nael()
{
  return 'nnnnnnnnnnnnnnnnnnnnnn';
}
public function home()
{
$title='hello this is home';
return view('welcome',['title'=>$title]);
}
}
