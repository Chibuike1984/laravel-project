<?php

namespace App\Http\Controllers;

//se App\Http\Controllers\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function login(Request $request)
    {
        $incoming = $request->validate([
            'loginfullname' => 'required',
            'loginpassword' => 'required'
        ]);
        
        if(auth()->attempt(['name' => $incoming['loginfullname'], 'password' => $incoming['loginpassword']]))
        {
            $request->session()->regenerate();
        }
        else
        {
            print('<script>alert("User information incorrect")</script>');
        }

        //print('<script>alert("user not correct")</script>');
        return redirect('/');
    }






    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }



    
    public function register(Request $request)
    {
        $incoming = $request->validate([
            'name' => 'required',
            'email'  => 'required',
            'password' => 'required'
        ]);

        $incoming['password'] = bcrypt($incoming['password']);
        $user = User::create($incoming);
        auth()->login($user);
        return redirect('/');
       //return 'WELCOME TO LARAVEL DASHBOARD';
    }

}
