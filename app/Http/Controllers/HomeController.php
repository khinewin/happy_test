<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Postitem;
use App\Models\Usershare;

use Auth;

class HomeController extends Controller
{

    public function welcome(){
        $posts=Post::OrderBy('id','desc')->where('ready', '=', true)->paginate(12);
        return view ('welcome')->with(['posts'=>$posts]);
    }

    public function saveForShare($post_id,$hash_id, $post_img){
        $p=Post::whereId($post_id)->firstOrFail();
        $my_user_id=Auth::User() ? Auth::User()->id : "";
        $old_user=Usershare::where('user_id', $my_user_id)->first();
        if($old_user){
            $old_user->post_id=$post_id;
            $old_user->share_id=$hash_id;
            $old_user->post_img=$post_img;
            $share_name=Auth::User()->name;
            $old_user->share_name=$share_name;
            $old_user->update();

        }else{
        
        $s=new Usershare();
        $s->post_id=$post_id;
        $s->share_id=$hash_id;
        $s->post_img=$post_img;
        if(Auth::User()){
            $user_id=Auth::User()->id;
            $share_name=Auth::User()->name;
            $s->user_id=$user_id;
            $s->share_name=$share_name;
        }
        
        $s->post_content=$p->title;
        $s->save();
    }

    if($old_user){
        $share=$old_user;
    }else{
        $share=$s;
    }

        return view('share')->with(['share'=>$share]);

    }
    
    public function showPost(Request $request){
       
        $id=$request->id;
        $hash_id=date('dmyhis').$id;
       $post=Post::whereId($id)->first(); 
       $items=Postitem::where('post_id', '=', $id)->get();
       $item_count=count($items);
       if($item_count >=1){
           $item=$items->random(1)->first();
       }else{
            $item=$items->first();
       }
       return view('show')->with(['post'=>$post, 'item_count'=>$item_count, 'item'=>$item, 'hash_id'=>$hash_id]);
    }
    
}
