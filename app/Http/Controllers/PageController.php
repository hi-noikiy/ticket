<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Return the homepage view.
     *
     * @return mixed
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * Return the contact page view.
     *
     * @return mixed
     */
    public function contact()
    {
        return view('contact');
    }
}
