<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionalController extends Controller
{
    public function conditionStatements(){
        $name = "Imdadul Haque";
        $email = "imdadul15-1440@diu.edu.bd";
        $message = "Hello, Imdadul Haque!";
        $age = 24;
        return view('Conditional',[
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'age' => $age,
        ]);
    }
}