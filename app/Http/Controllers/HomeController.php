<?php

namespace App\Http\Controllers;

use App\Album;
use App\Mentor;
use App\News;
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
        $news = News::orderBy('id', 'DESC')->limit('1')->first();
        $mentors = Mentor::orderBy('id', 'DESC')->limit('3')->get();
        $albums = Album::orderBy('id', 'DESC')->limit('3')->get();
        $reviews = Review::where('active', 1)->orderBy('id', 'DESC')->limit('2')->get();

        return view('index', [
            'news' => $news,
            'mentors' => $mentors,
            'albums' => $albums,
            'reviews' => $reviews,
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
