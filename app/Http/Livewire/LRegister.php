<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class LRegister extends Component
{
    public $name, $email, $password, $confirm_password;

    protected $rules = [

        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password'=>'required|min:6',
        'confirm_password'=>'required|same:password'

    ];



    public function updated()
    {

        $this->validate();

    }

    public function postRegister(){
        $this->validate();

        $user=new User();
        $user->name=$this->name;
        $user->email=$this->email;
        $user->password=bcrypt($this->password);
        $user->role="Admin";
        $user->save();
        session()->flash('msg', 'User account successfully created.');

        $this->name="";
        $this->email="";
        $this->password="";
        $this->confirm_password="";

    }
    public function render()
    {
        return view('livewire.l-register');
    }
}
