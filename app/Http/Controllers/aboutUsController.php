<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function index()
    {
    	return view('about-us');
    }
}
