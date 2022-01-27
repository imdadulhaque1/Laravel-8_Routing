<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function BlogStatus(){
        // echo "This is from Controller !";
        return view('blogStatus');
    }
}