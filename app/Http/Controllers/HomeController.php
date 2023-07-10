<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }
    public function home()
    {
        return view('front.index-1');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function portfolio()
    {
        return view('front.portfolio');
    }

    public function portfolio_slung()
    {
        return view('front.portfolio_details');
    }


}
