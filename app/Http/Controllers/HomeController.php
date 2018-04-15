<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::orderBy('id', 'DESC')->get();

        return view('index', [
            'slides' => $slides
        ]);
    }
}
