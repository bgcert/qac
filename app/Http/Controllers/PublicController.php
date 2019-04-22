<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class PublicController extends Controller
{
    public function index()
    {
        $types = InquiryController::inquiryTypes();
        return view('homepage', compact('types'));
    }

    public function aboutPage()
    {
        $types = InquiryController::inquiryTypes();
        return view('za-nas', compact('types'));
    }

    public function contactPage()
    {
        $types = InquiryController::inquiryTypes();
        return view('contacts', compact('types'));
    }

    public function standardsPage()
    {
        $types = InquiryController::inquiryTypes();
        return view('standarti', compact('types'));
    }
}
