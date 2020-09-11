<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        $user=Socialite::driver('github')->user();  
        //  dd($user);    
        $user=User::firstOrCreate(
            [
                'email'=>$user->email,                
                'username'=>$user->nickname
            ],[
                'name'=>$user->nickname,                
                'image'=>$user->avatar,                
                'password'=>Hash::make(Str::random(24))
            ]);
        Auth::login($user, true);
        return redirect()->route('main');

    }

    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookRedirect()
    {
        $user=Socialite::driver('facebook')->user();  
        //  dd($user);    
        $user=User::firstOrCreate(
            [
                'email'=>$user->email,                
                'username'=>$user->nickname
            ],[
                'name'=>$user->nickname,                
                'image'=>$user->avatar,                
                'password'=>Hash::make(Str::random(24))
            ]);
        Auth::login($user, true);
        return redirect()->route('main');

    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect()
    {
        $user=Socialite::driver('google')->user();  
        //  dd($user);    
        $user=User::firstOrCreate(
            [
                'email'=>$user->email,                
                'username'=>$user->nickname
            ],[
                'name'=>$user->nickname,                
                'image'=>$user->avatar,                
                'password'=>Hash::make(Str::random(24))
            ]);
        Auth::login($user, true);
        return redirect()->route('main');

    }
}
