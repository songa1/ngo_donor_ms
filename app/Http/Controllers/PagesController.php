<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ngo;

class PagesController extends Controller
{

    public function welcome()
    {
        $ngo = Ngo::where('created_by', '13')->get();
        return view('welcome')->with('ngo', $ngo);
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

}
