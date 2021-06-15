<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;

class DashboardController extends Controller
{
    // public function loggedin_page()
    // {
    //     if (Auth::user()->hasRole('user')){
    //         return view('homepage');
    //     } elseif(Auth::user()->hasRole('admin')){
    //         return view('admin_dashboard');
    //     }
    // }

    public function index()
    {
        return view('homepage');
        // return Auth::check()
        //     ?   $this->loggedin_page()
        //     :   View::make('homepage');
    }

    public function pcbuilder()
    {
        return view('pcbuilder');
    }

    public function popularpreset()
    {
        return view('popularpreset');
    }

    public function pcpartsinfo()
    {
        return view('pcpartsinfo');
    }

    public function components()
    {
        return view('components');
    }
}
