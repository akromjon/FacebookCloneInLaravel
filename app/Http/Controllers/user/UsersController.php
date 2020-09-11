<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\request\FriendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UsersController extends Controller
{
    public function index()
    {
        
    }  
    
   
    public function show($username)
    {
        
    }

   
    public function users()
    {
        $users = User::orderBy('id', 'DESC')->get();
        $friendRequests = Auth::user();
        return view('user.index', compact('users', 'friendRequests'));
    }
    public function add(Request $request)
    {
        
        $friend=new FriendRequest;
        $friend->user_id=Auth::user()->id;
        $friend->friend_id=$request['friend_id'];        
        $friend->save();
        return redirect()->back();
    }
}
