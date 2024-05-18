<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; //must include base conrollers
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function __constructor(){
        $this->middleware(['auth', 'verified']);
    }
    public function redirect()
    {
        $usertype= auth::user()->usertype;
        if($usertype=='1')
        {
            return view('backend.dashboard');
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function userlogout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
