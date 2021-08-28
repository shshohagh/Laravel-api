<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsApiController extends Controller
{
    public function index(){

        return Post::all();

    }
}
