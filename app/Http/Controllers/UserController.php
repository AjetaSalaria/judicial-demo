<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function profile(Request $request){
        return view('pages.profile');
    }
    
    public function updateprofile(Request $request)
    {
        $user = User::where('id',$request->userId)->first();

        if(!empty($user)){
                $user->update($request->all());
                return redirect()->route('profile')->with(['message' => 'Profile updated successfully']); 
        } 
        return redirect()->back()->with(['message' => 'Something went wrong']); 
    }
}
