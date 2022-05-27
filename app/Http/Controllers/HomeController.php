<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kamar;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view ('home.userpage');
    }
    public function katalogkamar()
    {
        return view ('home.katalogkamar');
    }
    public function blog()
    {
        return view ('home.blog');
    }
    public function tentangkami()
    {
        return view ('home.tentangkami');
    }
    
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view ('admin.home');
        }

        else
        {
            return view ('home.userpage');
        }
    }
}
