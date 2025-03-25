<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloworldcontroller extends Controller
{
    public function index()
    {
        return "Rakha Purwa Pandya - 17230859 - 17.4B.05";
    }
    public function ambilFile()
    {
        return view("ambilfile");
    }    

}    