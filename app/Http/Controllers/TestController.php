<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function (){
		
		return view ('public.dashbord');
	}
}
