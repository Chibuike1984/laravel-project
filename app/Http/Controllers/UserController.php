<?php

namespace App\Http\Controllers;

//se App\Http\Controllers\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function login(Request $request)
    {
        return redirect('welcome you have successfully login');
    }





    
    public function register(Request $request)
    {
       return 'WELCOME TO LARAVEL DASHBOARD';
    }

}
