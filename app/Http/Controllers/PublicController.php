<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {

        $pages = \App\Page::orderBy('priority', 'asc')->get();
        $services = \App\Service::orderBy('priority', 'asc')->get();
        $clients = \App\Client::all()->toArray();
        $clients = array_chunk($clients, 6);
        // dd($clients);
        $slides = \App\Slide::all();

        return view('homepage', compact('pages', 'services', 'clients', 'slides'));
    }

    public function serviceShow($slug)
    {
        $service = \App\Service::where('slug', $slug)->first();
        return view('service', compact('service'));
    }

    public function clientIndex()
    {
        $clients = \App\Client::all();
        return view('clients', compact('clients'));
    }
}
