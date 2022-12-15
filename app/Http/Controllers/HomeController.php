<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Postitem;
use Auth;

class HomeController extends Controller
{

    public function welcome(){
        $posts=Post::OrderBy('id','desc')->where('ready', '=', true)->paginate(10);
        return view ('welcome')->with(['posts'=>$posts]);
    }
    
    public function showPost($id){
        
       return view('show')->with(['post_id'=>$id]);
    }
    
}
