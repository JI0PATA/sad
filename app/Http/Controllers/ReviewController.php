<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id', 'DESC')->get();

        return view('admin.reviews', [
            'reviews' => $reviews
        ]);
    }

    public function active($id)
    {
        $review = Review::find($id);
        $review->active = 1;
        $review->update();

        return back();
    }

    public function block($id)
    {
        $review = Review::find($id);
        $review->active = 0;
        $review->update();

        return back();
    }

    public function delete($id)
    {
        $review = Review::find($id);
        $review->delete();

        return back();
    }
}
