<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPassController extends Controller
{
    // -------. using array | Array is better way to use comapct() function
    public function DataPassingController(){
        $data = [
            "name" => "Imdadul Haque",
            "email" => "imdadulhaqueimdad820@gmail.com"
        ];
        return view('dataPassViaController', $data);
    }

    // -------->  Using Compact function |  Array is better way to use comapct() function
//     public function DataPassingController(){
        
//         $name = "Imdadul Haque";
//         $email = "imdadulhaqueimdad820@gmail.com";

//         return view('dataPassViaController', compact("name", "email"));
//     }
}