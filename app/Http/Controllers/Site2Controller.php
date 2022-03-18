<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
   public function index()
   {
       return view('site2.index');
   }
   public function about()
   {
       $text="Nael Khalil";
       return view('site2.about')->with('text',$text);
   }
   public function contact()
   {
       return view('site2.contact');
   }
   public function posts()
   {
       return view('site2.post');
   }
}
