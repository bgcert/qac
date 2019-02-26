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
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {

    //     $pages = \App\Page::orderBy('priority', 'asc')->get();
    //     $services = \App\Service::orderBy('priority', 'asc')->get();

    //     // return view('homepage', compact('pages'));

        
    //     // dd($service);
    //     return view('homepage', compact('pages', 'services'));
    // }
}
