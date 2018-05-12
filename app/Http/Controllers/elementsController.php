<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class elementsController extends Controller
{
    public function index()
    {
    	return view('elements');
    }
}
