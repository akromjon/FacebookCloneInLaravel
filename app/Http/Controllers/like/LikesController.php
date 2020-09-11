<?php

namespace App\Http\Controllers\like;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\like\Like;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    public function store(Request $request)
    {
        if($request['liked']==Auth::user()->id)
        {
            $like=Like::where('post_id','=',$request['post_id'])->first();
            $removeLike=$like::where('user_id','=',Auth::user()->id)->first();
            $removeLike->delete();

            return redirect()->back(); 
        }
        else
        {
            $like=new Like;
            $like->post_id=$request['post_id'];
            $like->user_id=Auth::user()->id;        
            $like->like+1;
            $like->save();
            return redirect()->back(); 
        }  
       
    }
}
