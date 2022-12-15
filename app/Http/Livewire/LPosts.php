<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\File; 
use Livewire\WithFileUploads;
use App\Models\Postitem;


class LPosts extends Component
{
    use WithFileUploads;

    public function deletePost($id){
        $p=Post::whereId($id)->firstOrFail();
        $items=$p->postitems;
        foreach($items as $i){
            $old=file_exists(public_path("/items/".$i->item_name));
            if($old){
                unlink(public_path("/items/".$i->item_name));     
    
            }
            $i->delete();
        }
        $old=file_exists(public_path("/contents/".$p->content));
        if($old){
            unlink(public_path("/contents/".$p->content));     

        }
        $p->delete();
        session()->flash('msg', 'The post have been deleted.');
    }
    public function changeReady($id){
        $p=Post::whereId($id)->firstOrFail();
        if($p->ready){
            $p->ready=false;
        }else{
            $p->ready=true;
        }
        $p->update();
    }
    public function render()
    {
        $posts=Post::OrderBy('id', 'desc')->paginate('10');
        return view('livewire.l-posts')->with(['posts'=>$posts]);
    }
}
