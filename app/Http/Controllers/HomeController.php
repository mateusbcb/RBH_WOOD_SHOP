<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs()
    {
        return view('pages.aboutUs.index');
    }

    public function workplace()
    {
        return view('pages.workplace.index');
    }

    public function contacts()
    {
        return view('pages.contacts.index');
    }
}
