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

    // Recive data from form and send email to notify
    public function postSendnotify()
    {
        // $input = request()->all();
        $data = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'phone' => request()->input('phone'),
            'cartype' => request()->input('cartype'),
            'message' => request()->input('message'),
        ];

        // \Mail::send('emails.mail', $data, function($message) {
        //     $message->to('sagenefta@gmail.com', 'Rayther')
        //             ->subject('Notificacion desde la pagina web');
        //     $message->from('rayther.rentacar@gmail.com','Rayther');
        // });

        \Mail::send('emails.mail', $data, function ($message) {
            $message->to('teresa_avella@hotmail.com', 'Rayther')
                ->subject('Notificacion desde la pagina web');
            $message->from('rayther.rentacar@gmail.com', 'Rayther');
        });

        \Mail::send('emails.mail', $data, function ($message) {
            $message->to('javierriatiga@yahoo.com', 'Rayther')
                ->subject('Notificacion desde la pagina web');
            $message->from('rayther.rentacar@gmail.com', 'Rayther');
        });

        \Mail::send('emails.mail', $data, function ($message) {
            $message->to('info@rayther.com', 'Rayther')
                ->subject('Notificacion desde la pagina web');
            $message->from('rayther.rentacar@gmail.com', 'Rayther');
        });

        return response()->json(['html' => 1]);
    }

}
