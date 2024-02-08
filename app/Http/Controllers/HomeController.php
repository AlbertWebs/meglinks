<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $Solutions = DB::table('solutions')->get();
        $hero = "video";
        return view('front.index', compact('hero','Solutions'));
    }


    public function solutions($slung)
    {
        $Service = DB::table('solutions')->where('slung',$slung)->get();
        return view('front.solution', compact('Service'));
    }

    public function home()
    {
        $hero = "slider";
        return view('front.index-1', compact('hero'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function portfolio()
    {
        return view('front.portfolio');
    }

    public function about()
    {
        return view('front.about');
    }

    public function project_details()
    {
        return view('front.project_details');
    }



    public function portfolio_slung()
    {
        return view('front.portfolio_details');
    }

    public function our_team()
    {
        return view('front.our_team');
    }



    public function excellence($slung)
    {
        $Service = DB::table('services')->where('slung',$slung)->get();
        return view('front.excellence', compact('Service'));
    }

    public function blogs($slung)
    {
        $Blog = DB::table('blogs')->where('slung',$slung)->get();
        return view('front.blog', compact('Blog'));
    }


    public function latest_news()
    {
        $Blog = DB::table('blogs')->get();
        return view('front.blogs', compact('Blog'));
    }

    public function meglink_homes()
    {
        return view('homes.index');
    }

    public function meglink_home()
    {
        return view('homes.home');
    }



}
