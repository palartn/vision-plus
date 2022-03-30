<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site5Controller extends Controller
{
    public function index()
    {
        return view('site5.index');
    }
    public function data(Site4Request $requset)
    {


    }
}
