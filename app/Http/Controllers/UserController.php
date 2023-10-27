<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add(Request $request){
        $data = array( "id" => 1 , "name" => "Jordan");
        die(json_encode($data));
    }
}
