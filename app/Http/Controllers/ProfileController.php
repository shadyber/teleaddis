<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index(){
        if(!Auth::user()->hasRole('admin')){
            return view('profile');
        }
        return view('home');
    }
}
