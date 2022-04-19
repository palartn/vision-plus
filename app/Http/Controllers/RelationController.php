<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;


class RelationController extends Controller
{
    public function index()
    {
     

         return 'index Controller';
    }
    public function one_to_many()
    {
        $user=User::find(2);
        $data=$user->products; 
        return view('relation.index',compact('data'));
    }

    public function one_to_many_submit(Request $request)
    {
        $user=User::find(2);
        //dd($ag);
        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'user_id'=>$user->id
        ]);

    }
    public function many_to_many()
    {
        $std=Student::find(1);
        dd($std->student_data);
    }

}
