<?php

namespace App\Http\Controllers;
use App\Models\Table;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function Home()
    {
        return View('HomePage');
    //    $data = Table::all();
    //    return view('HomePage')->with('data',$data);
    }

    function About()
    {
        return View('AboutPage');
    }

    function Contact()
    {
        return View('ContactPage');
    }
//     <!-- @foreach($data as $dat)
// {{$dat->id}}
// @endforeach
//  -->

}
