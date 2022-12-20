<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request, $next) {  
           $r=Auth::user()->role;
           if($r != "Admin"){
                return redirect()->route("/");
           }
           return $next($request);
        });
    }
    public function getDashboard(){
        return view('admin.dashboard');
    }
    public function newPosts(){
        return view('posts.new');
    }
    public function posts(){
        return view('posts.all');
    }
    public function editPostTemplate($id){
        $post=Post::whereId($id)->firstOrFail();
        return view('posts.edit-template')->with(['post'=>$post]);
    }
    public function editPost($id){
        $post=Post::whereId($id)->firstOrFail();
        return view('posts.edit')->with(['post'=>$post]);
    }
}
