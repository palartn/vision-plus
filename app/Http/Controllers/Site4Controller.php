<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Site4Request;

class Site4Controller extends Controller
{
    public function index()
    {
        return view('site4.index');
    }
    public function store(Site4Request $requset)
    {

        dd($requset->all());
    }
}
