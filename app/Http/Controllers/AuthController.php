<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
use Session;

class AuthController extends Controller
{
    public function getRegister(){
        return view('auth.register');
    }
    public function getLogin(){
        return view('auth.login');
    }
   
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = User::where('facebook_id', $user->id)->first();
         
            if($finduser){
         
                Auth::login($finduser);
       
                return redirect(Session::get('my_url'));
         
            }else{


                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'facebook_id'=> $user->id,
                        'email'=> $user->email,
                        'password' => encrypt(''),
                    ]);
        
                Auth::login($newUser);
        
                return redirect(Session::get('my_url'));
            }
       
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


}



 /*
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            // if the user exits, use that user and login
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                return redirect('/dashboard');
            }else{
                //user is not yet created, so create first
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('')
                ]);
                //every user needs a team for dashboard/jetstream to work.
                //create a personal team for the user
               
                $newUser->save();
                //login as the new user
                Auth::login($newUser);
                // go to the dashboard
                return redirect('/dashboard');
            }
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    */