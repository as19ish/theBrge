<?php

namespace App\Http\Controllers;

use App\HomeService;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
    	$homeServices = HomeService::join('services','services.id','=','home_services.services_id')->get();
    	return view('index')->with(['homeServices'=>$homeServices]);
    }
}
