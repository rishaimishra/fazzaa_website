<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class test extends Controller
{
    public function index(Request $r)
    {	
     

		return view('front.master');
     }
     
	public function login(Request $r)
     {	
      	return $r;
     }

 

}
