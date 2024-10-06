<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Declare data array
        $data['title'] = "Home";

        return view('front/home', $data);
    }

    public function kopisan_cafe()
    {
        // Declare data array
        $data['title'] = "Kopisan Cafe";

        return view('front/kopisan-cafe', $data);
    }

    public function dan_cafe()
    {
        // Declare data array
        $data['title'] = "D'An Cafe";

        return view('front/dan-cafe', $data);
    }

    public function jebat_cafe()
    {
        // Declare data array
        $data['title'] = "Jebat Cafe";

        return view('front/jebat-cafe', $data);
    }

    public function today_offer()
    {
        // Declare data array
        $data['title'] = "Today's Offer";

        return view('front/today-offer', $data);
    }

    public function contact_us()
    {
        // Declare data array
        $data['title'] = "Contact Us";

        return view('front/contact-us', $data);
    }
}
