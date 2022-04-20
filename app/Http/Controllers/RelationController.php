<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelationController extends Controller
{
    public function index()
    {
        return ' index relations';
    }
    public function one_to_many()
    {
        $user_n=User::find(1);
        $aa= $user_n->post_all;
        return view ('relations.index',compact ('aa'));

        // $post=Post::find(2);
        // return "the user added is ". $post->user->name."<br>"."the post is : ". $post->name;
        //return view('relations.index');
    }


    public function one_to_many_submit(Request $request)
    {
    $user=User::find(1);
    // dd($user);
    product::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'user_id'=>Auth::id()
    ]);
    }
    public function many_to_many()
    {
        $user=Post::find(1);
dd($user);
    }
}
