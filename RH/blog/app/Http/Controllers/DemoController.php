<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function myName($fName,$lName,$age)
    {
        return "first name: ".$fName. "<br>last name: ".$lName. "<br>age: ".$age;
    }
}
