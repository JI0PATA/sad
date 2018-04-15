<?php

namespace App\Http\Controllers;

use App\Review;
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

    public function callback(Request $request)
    {
        $review = new Review;

        $review->name = $request->name;
        $review->email = $request->email;
        $review->comment = $request->comment;

        $review->save();

        return back();
    }
}
