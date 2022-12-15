<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Livewire\WithFileUploads;
use App\Models\Postitem;


class LEditpost extends Component
{
    use WithFileUploads;

    public $post, $item_name;

    protected $rules = [
        'item_name' => 'required|image|max:1024',
       ];

    public function updated()
    {

        $this->validate();

    }


    public function create(){
        $this->validate();
        $file_name=$this->item_name->getFilename();
        $this->item_name->storeAs('/', $file_name, $disk = 'items');

        $p=new Postitem();
        $p->post_id=$this->post->id;
        $p->item_name=$file_name;
        $p->save();


        $this->item_name="";

    }

    public function deleteItem($id){
        $item=Postitem::whereId($id)->firstOrFail();
        $old=file_exists(public_path("/items/".$item->item_name));
        if($old){
            unlink(public_path("/items/".$item->item_name));     

        }
        $item->delete();
    }

    public function render()
    {
        $items=Postitem::where('post_id', $this->post->id)->get();
        return view('livewire.l-editpost')->with(['items'=>$items]);
    }
}
