<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class singleBlogController extends Controller
{
    public function index()
    {
    	return view('single-blog');
    }
}
