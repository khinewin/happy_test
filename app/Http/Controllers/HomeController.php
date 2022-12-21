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

    public function saveForShare($post_id,$hash_id, $img_id, Request $request){
        $share_name=$request->share_name;
        $img=Postitem::whereId($img_id)->first();
        $p=Post::whereId($post_id)->first();
        if(!$p){
            return redirect()->route('/');
        }
        if(!$img){
            return redirect()->route('/');
        }
        $old_share=Usershare::where('img_id', $img_id)->first();
        if($old_share){
            $s=$old_share;
        }else{
            $s=new Usershare();
        $s->post_id=$post_id;
        $s->share_id=$hash_id;
        $s->post_img=$img->item_name;
        $s->img_id=$img->id;
        if(Auth::User()){
            $user_id=Auth::User()->id;
            $share_name=Auth::User()->name;
            $s->user_id=$user_id;
            $s->share_name=$share_name;
        }
        
        $s->post_content=$p->title;
        $s->post_ans=$p->ans;
        $s->save();
        }
        return view('share')->with(['share'=>$s, 'share_name'=>$share_name]);


        /*
        $p=Post::whereId($post_id)->firstOrFail();
        $my_user_id=Auth::User() ? Auth::User()->id : "";
        $old_user=Usershare::where('user_id', $my_user_id)->first();
        if($old_user){
            $old_user->post_id=$post_id;
            $old_user->share_id=$hash_id;
            $old_user->post_img=$img->item_name;
            $old_user->img_id=$img->id;
            $share_name=Auth::User()->name;
            $old_user->share_name=$share_name;

            $old_user->update();

        }else{
        
        $s=new Usershare();
        $s->post_id=$post_id;
        $s->share_id=$hash_id;
        $s->post_img=$img->item_name;
        $s->img_id=$img->id;
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
        */
        return view('share')->with(['share'=>$share]);

    }
    
    public function showPost(Request $request){
       if(!Auth::User()){
            return redirect()->route("facebook.login");
       }
        $id=$request->id;
       $post=Post::whereId($id)->first(); 
        if(!$post){
            return redirect()->route('/');
        }
       return view('show')->with(['post'=>$post]);
    }
    
}
