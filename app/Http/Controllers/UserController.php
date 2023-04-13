<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Rules\MobileRule;
use Dotenv\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function Create()
    {
        return view('user.register');

    }

    public function store(UserRegisterRequest $request)
    {
//        $request->validate([
////            'name' => 'required|min:2|string',
////            'last_name' => 'required|min:2|string',
////            'Gender' => 'required',
////            'birth_day' => 'required|datetime',
////            'mobile'=> ['required',New MobileRule],
////            'email'=> 'required|email|unique:users'
//        ]);

        $request->validated();

        User::create([

            'name' => request('name'),
            'last_name' => request('last_name'),
            'mobile' => request('mobile'),
            'email' => request('email'),
            'gender' => request('gender'),
            'birth_day' => request('birth_day'),
            'password' => request('password'),


        ]);

        return redirect()->back()->with('success','ok ');

    }

}
