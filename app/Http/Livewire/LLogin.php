<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class LLogin extends Component
{
    public $password, $email;

    protected $rules = [

       
        'email' => 'required|email|exists:users',
        'password'=>'required',
       

    ];



    public function updated()
    {

        $this->validate();

    }

    public function postLogin(){
        $this->validate();
       

        if(Auth::attempt(['email'=>$this->email, 'password'=>$this->password])){

            return redirect()->route('dashboard');

        }else{
            session()->flash('msg', 'Authentication failed.');
            $this->email="";
            $this->password="";
        }

        


    }
    public function render()
    {
        return view('livewire.l-login');
    }
}
