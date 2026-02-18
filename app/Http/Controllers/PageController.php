<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function dashboard()
    {
        return view('dashboard');
    }

    public function member()
    {
        return view('member');
    }

    public function book(){
        return view('book');
    }

    public function borrowing(){
        return view('borrowing');
    }


}
