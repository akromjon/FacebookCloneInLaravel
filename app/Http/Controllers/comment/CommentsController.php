<?php

namespace App\Http\Controllers\comment;

use App\Models\comment\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feed\Post;

use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    public function store()
    {
        $data=request()->validate([
            'user_id'=>'required',
            'content'=>'required|min:3',
            'post_id'=>'required', 
        ]);
        $comment=Comment::create($data);
        return redirect()->back();
    }

    public function edit(Request $request,$id)
    {
        $post = Post::where('id','=',$request['post'])->first();
        $comment=Comment::findOrFail($id);
        return view('index.edit_comment',compact('post','comment'));

    }
    public function update(Request $request,$id)
    {
        $comment=Comment::findOrFail($id);
        $comment->content=$request['content'];        
        $comment->save();

        return redirect()->route('feeds.view',$request['post_slug']);     

    }
    public function destroy($id)
    {
        $comment=Comment::find($id);
        $comment->delete();
        return redirect()->back();
    }
} 
