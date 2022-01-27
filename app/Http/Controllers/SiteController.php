<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function MySite(){
        return view('Site');
    }

    public function MyPosts($post_id=""){
        echo "<h1>ID:".$post_id."</h1>";
        return view('myPosts');
    }
}