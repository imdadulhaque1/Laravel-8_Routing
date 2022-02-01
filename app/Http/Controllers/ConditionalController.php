<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionalController extends Controller
{
    public function conditionStatements(){
        $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $name = "Imdadul Haque";
        $email = "imdadul15-1440@diu.edu.bd";
        $message = "Hello, Imdadul Haque!";
        $age = 24;
        return view('Conditional',[
            'data' => $numbers, 
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'age' => $age,
        ]);
    }
    // public function numbersLoop(){
    //     $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    //     return view('Conditional', [
    //         'data' => $numbers, 
    //     ]);
    // }
}