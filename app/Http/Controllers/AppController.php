<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // Entry php page
    public function index()
    {
        return view('post');
    }
}
