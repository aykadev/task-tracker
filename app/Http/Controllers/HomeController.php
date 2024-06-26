<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Auth::user()->projects;
        return view('dashboard', compact('projects'));
    }
}
