<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
public function index()
{
 //   $orders=order::all();
    // $orders=order::orderBy('id','desc')->simplePaginate(5);
    $orders=order::orderBy('id','desc')->paginate(10);
    // dd($orders);
    return view('order.index',compact('orders'));
}
}
