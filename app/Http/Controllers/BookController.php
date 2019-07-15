<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function hello($name){
    	return "hello ".$name;
    }
}
