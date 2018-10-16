<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainsiteController extends Controller
{
    // View for Home
    public function getHome()
    {
        return view('pages.home');
    }

    // View for Contactus
    public function getContactus()
    {
        return view('pages.contactus');
    }

    // View for Smallcars
    public function getSmallcars()
    {
        return view('pages.smallcars');
    }

        // View for Suvcars
    public function getSuvcars()
    {
        return view('pages.suvcars');
    }

    // View for Midcars
    public function getMidcars()
    {
        return view('pages.midcars');
    }

    // View for Aboutus
    public function getAboutus()
    {
        return view('pages.aboutus');
    }

    // View for Delivery
    public function getDelivery()
    {
        return view('pages.delivery');
    }

}
