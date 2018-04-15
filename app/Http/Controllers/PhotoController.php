<?php

namespace App\Http\Controllers;

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
}
