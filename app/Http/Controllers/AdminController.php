<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('id', 'DESC')->get();

        return view('admin.index', [
            'slides' => $slides,
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');

        return redirect()->route('home');
    }
}
