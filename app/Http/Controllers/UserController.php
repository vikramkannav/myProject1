<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    }


    public function update()
    {
        return view('create_post');
    }
}
