<?php

namespace App\Http\Controllers\dislike;

use App\Models\dislike\Dislike;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DislikesController extends Controller
{
    public function store(Request $request)
    {
        if($request['liked']==Auth::user()->id)
        {
            $like=Dislike::where('post_id','=',$request['post_id'])->first();
            $removeLike=$like::where('user_id','=',Auth::user()->id)->first();
            $removeLike->delete();
            return redirect()->back(); 
        }
        else
        {
            $like=new Dislike();
            $like->post_id=$request['post_id'];
            $like->user_id=Auth::user()->id;        
            $like->dislike+1;
            $like->save();
            return redirect()->back(); 
        }  
    }
}
