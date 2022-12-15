<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Postitem;
use App\Models\Post;
use Session;
class LShowpost extends Component
{
        public $item, $post_id;
     public  $item_count;

    

    public function doRetry(){
        $items=Postitem::where('post_id', '=', $this->post_id)->get();
        $item_count=count($items);
        $this->item_count=$item_count;
        if($item_count >=1){
            $this->item=$items->random(1)->first();
            Session::put('item', $this->item);
        }
       
    }
    
    public function render()
    {
        $items=Postitem::where('post_id', '=', $this->post_id)->get();
        $item_count=count($items);
        $this->item_count=$item_count;
        if($item_count >=1){
            $this->item=$items->random(1)->first();
            Session::put('item', $this->item);
        }
        /*
        $get_posts=Post::OrderBy('id','desc')->where('ready', '=', true)->paginate(10);
        $count=count($get_posts);
        if($count >= 10){
            $posts=$get_posts->random(10);
        }else{
            $posts=$get_posts;

        }
        */
        return view('livewire.l-showpost');
    }
    
}
