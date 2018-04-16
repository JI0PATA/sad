<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function delete($id)
    {
        $photo = Photo::find($id);
        $photo->delete();

        return back();
    }

    public function getPhotos($id)
    {
        $photos = Photo::where('album_id', $id)->orderBy('id', 'DESC')->get();
        $album = Album::find($id);

        return view('photos', [
            'photos' => $photos,
            'album' => $album
        ]);
    }

}
