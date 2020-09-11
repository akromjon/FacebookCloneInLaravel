<?php

namespace App\Http\Controllers\picture;

use App\Http\Controllers\Controller;
use App\Models\picture\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PicturesController extends Controller
{
    public function index()
    {
        return view('picture.index');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'image' => 'required',            
        ]);
        $picture = new Picture;
        $picture->user_id = Auth::user()->id;
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $image->store("users/images/", "storage");
            $picture->image = "/storage/users/images/" . $image->hashName();
        } else {
            $picture->image = 0;
        }
        $picture->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $picture = Picture::find($id);
        $picture->delete();
        return redirect()->back();
    }
}
