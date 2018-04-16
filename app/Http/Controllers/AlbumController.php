<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::orderBy('id', 'DESC')->get();

        return view('admin.albums', [
            'albums' => $albums,
        ]);
    }

    public function add()
    {
        return view('modules.albums.add');
    }

    public function create(Request $request)
    {
        $album = new Album;

        if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
            $request->file->move(public_path('img/albums'), $request->file->getClientOriginalName());
            $album->img = $request->file->getClientOriginalName();
        } else return back();

        $album->title = $request->title;

        $album->save();

        return redirect()->route('albums');
    }

    public function edit($id)
    {
        $album = Album::find($id);

        return view('modules.albums.edit', [
            'album' => $album
        ]);
    }

    public function update(Request $request, $id)
    {
        $album = Album::find($id);

        if ($request->file !== null) {
            if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
                $request->file->move(public_path('img/albums'), $request->file->getClientOriginalName());
                $album->img = $request->file->getClientOriginalName();
            } else return back();
        }

        $album->title = $request->title;

        $album->update();

        return back();
    }

    public function delete($id)
    {
        $album = Album::find($id);
        $album->delete();

        return redirect()->route('albums');
    }

    public function photos($id)
    {
        $photos = Photo::where('album_id', $id)->orderBy('id', 'DESC')->get();

        return view('modules.albums.view', [
            'photos' => $photos,
            'album_id' => $id,
        ]);
    }

    public function uploadPhotos(Request $request, $id)
    {
        foreach($request->file as $file) {
            $photo = new Photo;
            if ($file->getClientMimeType() === 'image/png' || $file->getClientMimeType() === 'image/jpeg') {
                $file->move(public_path('img/albums/photos'), $file->getClientOriginalName());
                $photo->img = $file->getClientOriginalName();
                $photo->album_id = $id;
                $photo->save();
            }
        }

        return back();
    }

    public function getAlbums()
    {
        $albums = Album::orderBy('id', 'DESC')->get();

        return view('albums', [
            'albums' => $albums
        ]);
    }
}
