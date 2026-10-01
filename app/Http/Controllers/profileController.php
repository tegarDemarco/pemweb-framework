<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function index()
    {
        $name = "Tegar";
        $age = 21;
        $bio = "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        return view('profile', compact('name', 'age', 'bio'));
    }   
}
