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
       // if(Auth::user()){
        $items=Postitem::where('post_id', '=', $id)->get();
        $item_count=count($items);
        if($item_count >=1){
            $item=$items->random(1)->first();
        }else{
            $item=$items->first();
        }
            $post=Post::whereId($id)->first();
            return view('show')->with(['post'=>$post, 'item'=>$item, 'item_count'=>$item_count]);
       // }else{
          //  return redirect()->route('facebook.login');
       // }

       
    }
    
}
