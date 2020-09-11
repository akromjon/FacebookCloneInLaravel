<?php

namespace App\Http\Controllers\message;

use App\Http\Controllers\Controller;
use App\Models\message\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{

    public function index()
    {
        return view('message.index');
    }


    public function message($username)
    {
        $messages = Message::getorder()->get();
        $mymessages = Message::message()->first();
        $user = User::friend($username)->first();
        return view('message.message', compact('user', 'messages', 'mymessages'));
    }


    public function store(Request $request)
    {
        $data = request()->validate([
            'user_id' => 'required|min:1',
            'friend_id' => 'required',
            'message' => 'required',
        ]);
        $message = Message::create($data);        
        return redirect()->back();
    }

}
