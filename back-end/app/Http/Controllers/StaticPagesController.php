<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(Request $request)
    {
        return view('home');
    }
    public function page_card1()
    {
        return view('page_card1');
    }
    public function page_card2()
    {
        return view('page_card1');
    }
    public function page_card3()
    {
        return view('page_card1');
    }
 
}
