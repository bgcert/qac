<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class PublicController extends Controller
{
    public function index()
    {

        $pages = \App\Page::orderBy('priority', 'asc')->get();

        // Cached services
        $services = Cache::rememberForever('services', function() {
            return \App\Service::orderBy('priority', 'asc')->get();
        });

        // Cached clients
        $clients = Cache::rememberForever('clients', function() {
            return \App\Client::all();
        });

        $clients = array_chunk($clients->toArray(), 6);

        $slides = \App\Slide::where('visible', true)->get();

        return view('homepage2', compact('pages', 'services', 'clients', 'slides'));
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
