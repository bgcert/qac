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

        $quotes = Cache::rememberForever('quotes', function() {
            return \App\Quote::all();
        });

        $slides = \App\Slide::where('visible', true)->get();
        $courses = \App\Course::where('visible', true)->get();

        return view('homepage', compact('pages', 'services', 'clients', 'slides', 'courses', 'quotes'));
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
