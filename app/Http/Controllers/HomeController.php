<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class HomeController extends Controller
{
    function index(){
        return view('home.userpage');
    }

    function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype=='1'){
            return view ('admin.home');
        }
        else {
            return view ('dashboard');
        }
    }
}
