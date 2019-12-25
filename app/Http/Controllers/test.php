<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class test extends Controller
{
    public function index()
    {
    	return Book::all();
    }
}
