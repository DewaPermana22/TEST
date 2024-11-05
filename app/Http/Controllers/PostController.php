<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        return view('post');
    }
}
