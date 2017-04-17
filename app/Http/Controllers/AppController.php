<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
    	/*index.html*/
    	return view('v1.index');
    }
}
