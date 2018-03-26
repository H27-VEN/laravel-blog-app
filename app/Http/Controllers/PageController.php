<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        $title = 'Welcome User!';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function service() {
        return view('pages.services');
    }
}
