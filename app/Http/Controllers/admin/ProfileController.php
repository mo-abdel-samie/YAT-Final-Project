<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileRequest;


use App\Models\Profile;
use App\Traits\AdminTrait;

class ProfileController extends Controller
{
    use AdminTrait;

    public function createProfile(Request $request) {

        $file_name = null;
        // save photo in system
        if($request->hasFile('image')){
            $file_name = $this->uploadImage($request->image,'upImgs');
        }

        //get row Data
        $profile = Profile::find(3);
        $profile->name  = $request->name;
        $profile->role  = $request->role;
        $profile->image = ($file_name?$file_name:$profile->image);
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->aboute_me = $request->about;
        $profile->save();



        return redirect('/admin/profile')->with('successMasege','Profile created Succesfuly');
    }

    public function getProfile() {

        $profile = Profile::find(3);
        return view('admin.profile')->with(['profile'=>$profile]);

    }
}
