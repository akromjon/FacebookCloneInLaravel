<?php

namespace App\Http\Controllers\friend;

use App\friend\Friend;
use App\Http\Controllers\Controller;
use App\request\FriendRequest;
use App\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{
    public function index()
    {
        $users = User::getorder()->get();
        $friendRequests = Auth::user();
        return view('friend.index', compact('users', 'friendRequests'));
    }

    

    public function confirm(Request $request)
    {
            
        $request_id =$request['request_id'];
        $requestFriend=FriendRequest::find($request_id);
        $confirm=new Friend;
        $confirm->user_id=$requestFriend->user_id;
        $confirm->friend_id=$requestFriend->friend_id;  
        $confirm->confirm="1";
        $confirm->save();
        $requestFriend->delete();
        return redirect()->back();        
    }
    
    
}
