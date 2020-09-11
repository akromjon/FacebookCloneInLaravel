<?php

namespace App\Http\Controllers\feed;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\feed\Post;


class PostsController extends Controller
{

    public function store(Request $request)
    {
        $data = request()->validate([            
            'content' => 'required|min:3',
            'image' => 'required',
        ]);

        $post = new Post;
        $post->content = $request['content'];
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $image->store("products/images/", "storage");
            $post->image = "/storage/products/images/" . $image->hashName();
        } else {
            $post->image = 0;
        }
        $post->user_id = Auth::user()->id;
        $post->slug = Str::random(30);
        $post->save();
        return redirect()->back();
    }


    public function show($slug)
    {

        $post = Post::getslug($slug)->firstOrFail();
        return view('index.single', compact('post'));
    }

    public function edit($slug)
    {
        $post=Post::where('slug','=',$slug)->firstOrFail();
        return view('feed.edit',compact('post'));
    }
    public function update(Request $request, $id)
    {
        $data = request()->validate([            
            'content' => 'required|min:3',            
        ]);
        $post=Post::findOrFail($id);
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $image->store("products/images/", "storage");
            $post->image = "/storage/products/images/" . $image->hashName();
        } else {
            $post->image = $request['image_old'];
        }
        $post->content=$request['content'];
        $post->user_id=Auth::user()->id;
        $post->save();

        return redirect()->back();
    }
    public function destroy($slug)
    {
        $post=Post::where('slug','=',$slug)->firstOrFail();
        $post->delete();
        return redirect()->back();
    }
}
