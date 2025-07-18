<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Logic for the admin dashboard can be added here
        return view('admin.index'); 
    }
    public function home()
    {
        // Logic for the home page can be added here
        return view('home.index'); 
    }
}
