<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class RelationController extends Controller
{
    public function index()
    {
     

         return 'index Controller';
    }
    public function one_to_many()
    {
        $product=Product::find(2);
        return "the product is ".$product->name . "<br >"."the User is " . $product->user->name;
        // dd($product->user);
 
    //  return view('relation.index');
    }

    public function one_to_many_submit(Request $request)
    {
        // $user=User::find(2);
        // //dd($ag);
        // Product::create([
        //     'name'=>$request->name,
        //     'price'=>$request->price,
        //     'user_id'=>$user->id
        // ]);


    

    }

}
