<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      return view('dashboard');
    }


    public function create()
    {
        dd('test');
        return view('create_post');
    }


}
