<?php

namespace App\Http\Controllers;
use App\User;

class MyController extends Controller
{

    public function Myfunction()
    {
        $myArray = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );
        return response()->json($myArray);

    }

    public function fstMethod()
    {
        return redirect('/2nd');
    }

    public function sndMethod()
    {
        return '2nd';
    }

    public function download()
    {
        $path = 'demo.txt';
        return response()->download($path);
    }
}
