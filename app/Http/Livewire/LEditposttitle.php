<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Auth;

class LEditposttitle extends Component
{
    use WithFileUploads;
    public $title, $content, $post, $ans;
    public function mount($post){
        $this->post=$post;
        $this->title=$post->title;
        $this->ans=$post->ans;
    }
    public function updatePost(){      
        

        $p= Post::whereId($this->post->id)->firstOrFail();
        $p->title=$this->title;
        $p->ans=$this->ans;
        $p->user_id=Auth::user()->id;
        
        if($this->content){
            $old=file_exists(public_path("/contents/".$p->content));
            if($old){
                unlink(public_path("/contents/".$p->content));     
    
            }
            $file_name=$this->content->getFilename();     
            $this->content->storeAs('/', $file_name, $disk = 'contents');
            $p->content=$file_name;
        }
        $p->update();

        session()->flash('msg', 'The post have been updated.');

     
      

    }
    public function render()
    {
        return view('livewire.l-editposttitle');
    }
}
