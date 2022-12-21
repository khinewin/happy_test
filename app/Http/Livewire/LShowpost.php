<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Postitem;
use App\Models\Post;
use Session;
class LShowpost extends Component
{
        public $item, $post_id, $hash_id;
     public  $item_count;
    public function mount($id){
        $this->post_id=$id;
        $this->hash_id=date('dmyhis').$id;
    }
    

    public function doRetry(){
        $items=Postitem::where('post_id', '=', $this->post_id)->get();
        $item_count=count($items);
        $this->item_count=$item_count;
        if($item_count >=1){
            $this->item=$items->random(1)->first();
        }
       
    }
    
    public function render()
    {
        $items=Postitem::where('post_id', '=', $this->post_id)->get();
        $item_count=count($items);
        $this->item_count=$item_count;
        if($item_count >=1){
            $this->item=$items->random(1)->first();
        }
      
        $posts=Post::inRandomOrder()->limit(12)->get();
       
      
        
        return view('livewire.l-showpost')->with(['posts'=>$posts]);
    }
    
}
