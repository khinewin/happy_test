<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Post;
use Livewire\WithFileUploads;

class LNewpost extends Component
{
    use WithFileUploads;
    public $title, $content, $ans;

    protected $rules = [
        'title'=>'required',
        'content' => 'required|image|max:1024',
        'ans'=>'required'
       ];

    public function updated()
    {

        $this->validate();

    }

    public function create(){
        $this->validate();
        $file_name=$this->content->getFilename();
        $this->content->storeAs('/', $file_name, $disk = 'contents');

        $p=new Post();
        $p->title=$this->title;
        $p->ans=$this->ans;
        $p->user_id=Auth::user()->id;
        $p->content=$file_name;
        $p->save();

        session()->flash('msg', 'The post have been created.');

        $this->title="";
        $this->content="";
        $this->ans="";

    }


    public function render()
    {
        return view('livewire.l-newpost');
    }
}
