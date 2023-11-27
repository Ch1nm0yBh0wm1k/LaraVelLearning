<?php

namespace App\Http\Controllers;
use App\Models\Table;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function home()
    {
       $data = Table::all();
       return view('HomePage')->with('data',$data);
    }

    function About()
    {
        return "I Am From About Controller";
    }

    function Contact()
    {
        return "I Am From Contact Controller";
    }
}
