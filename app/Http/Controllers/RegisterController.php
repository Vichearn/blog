<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
	{
		return view("register");	
	}
	public function save(Request $request)
	{
		$name = $request->input('name');
		$data = array(
			'name' => $name
		);
		return view("register",$data);
	}
}