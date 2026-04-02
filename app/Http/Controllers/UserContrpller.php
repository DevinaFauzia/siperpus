<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContrpller extends Controller
{
    public function show($name){
        return "Hello ".$name."...!"; 
    }
}
