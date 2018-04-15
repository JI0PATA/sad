<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    public function add()
    {
        return view('modules.slides.add');
    }

    public function create(Request $request)
    {
        $slide = new Slide;

        if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
            $request->file->move(public_path('img/slider'), $request->file->getClientOriginalName());
            $slide->img = $request->file->getClientOriginalName();
        } else return back();

        $slide->save();

        return redirect()->route('admin');
    }

    public function edit($id)
    {
        $slide = Slide::find($id);

        return view('modules.slides.edit', [
            'slide' => $slide
        ]);
    }

    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);

        if ($request->file !== null) {
            if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
                $request->file->move(public_path('img/slider'), $request->file->getClientOriginalName());
                $slide->img = $request->file->getClientOriginalName();
            } else return back();
        }

        $slide->save();

        return back();
    }

    public function delete($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return redirect()->route('admin');
    }
}
