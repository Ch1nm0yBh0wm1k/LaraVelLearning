<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    function GetName($id, $firstName, $lastName)
    {
        // return  "<br> My ID: " . $id . "<br> First Name: " . $firstName . "<br> Last Name: " .$lastName;
        //declaring associative array
        return view('DemoView', ['firstKey' => $id, 'secKey' => $firstName, 'trdKey' => $lastName]);   
    }
}
