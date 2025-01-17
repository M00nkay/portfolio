<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'My Potrofolio'
        ];

        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About me'
        ];

        return view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact me'
        ];

        return view('pages/contact', $data);
    }
}
