<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Front extends Controller
{
    //
	public function __construct(){

	}

    public function index(){
    	return view('pages/home');
    }

    public function future(){
    	return view('pages/future');
    }

    public function songs(){
    	return view('pages/songs');
    }

    public function gifts(){
    	return view('pages/gifts');
    }

    public function photos(){
    	return view('pages/photos');
    }
}


