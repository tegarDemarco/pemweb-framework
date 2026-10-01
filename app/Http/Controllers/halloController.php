<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halloController extends Controller
{
    public function index()
    {
        $name = "Tegar";
        $age = 21;
        $status = true;
        $bio = "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        return view('hallo', compact('name', 'age', 'bio', 'status'));
    }
}
