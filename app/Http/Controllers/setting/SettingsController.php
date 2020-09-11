<?php

namespace App\Http\Controllers\setting;

use App\Http\Controllers\Controller;
use App\Models\setting\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class SettingsController extends Controller
{
    public function index()
    {
        return view('setting.index');
    }
    public function update(Request $request)
    {
        if (Auth::user()->profile) {
            $info = Profile::where('user_id', '=', $request['user_id'])->first();
            $data = request()->validate([            
                'day' => 'required|max:3',
                'month' => 'required|max:15',
                'year'=>'required|max:4',
                'city'=>'required|max:50',
                'country'=>'required|max:30',
                'gender'=>'required|max:10',
                'information'=>'required|max:100|min:5',
            ]);
            $info->user_id = Auth::user()->id;
            $info->day = $request['day'];
            $info->month = $request['month'];
            $info->year = $request['year'];
            $info->city = $request['city'];
            $info->country = $request['country'];
            $info->gender = $request['gender'];
            $info->information = $request['information'];
            $info->save();
            return redirect()->back();
        } else {
            $data = request()->validate([            
                'day' => 'required|max:3',
                'month' => 'required|max:15',
                'year'=>'required|max:4',
                'city'=>'required|max:50',
                'country'=>'required|max:30',
                'gender'=>'required|max:10',
                'information'=>'required|max:100|min:5',
            ]);
            $info = new Profile;
            $info->user_id = Auth::user()->id;
            $info->day = $request['day'];
            $info->month = $request['month'];
            $info->year = $request['year'];
            $info->city = $request['city'];
            $info->country = $request['country'];
            $info->gender = $request['gender'];
            $info->information = $request['information'];
            $info->save();
            return redirect()->back();
        }
    }

    public function profile(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $data = request()->validate([            
            'name' => 'max:20',
            'month' => 'max:20',
            'image'=>''
            
        ]);
        $user->name = $request['name'];
        $user->email = $request['email'];
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $image->store("users/images/", "storage");
            $user->image = "/storage/users/images/" . $image->hashName();
        } else {
            $user->image = $request['image_old'];
        }
        if ($request->hasfile('timeline_image')) {
            $image = $request->file('timeline_image');
            $image->store("users/images/", "storage");
            $user->timeline_image = "/storage/users/images/" . $image->hashName();
        } else {
            $user->timeline_image = $request['timeline_image_old'];
        }
        $user->save();
        return redirect()->back();
    }
}
