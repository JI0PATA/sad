<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();

        return view('admin.news', [
            'news' => $news
        ]);
    }

    public function add()
    {
        return view('modules.news.add');
    }

    public function create(Request $request)
    {
        $news = new News;

        if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
            $request->file->move(public_path('img/news'), $request->file->getClientOriginalName());
            $news->img = $request->file->getClientOriginalName();
        } else return back();

        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        return redirect()->route('news');
    }

    public function edit($id)
    {
        $news = News::find($id);

        return view('modules.news.edit', [
            'news' => $news
        ]);
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);

        if ($request->file !== null) {
            if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
                $request->file->move(public_path('img/news'), $request->file->getClientOriginalName());
                $news->img = $request->file->getClientOriginalName();
            } else return back();
        }

        $news->title = $request->title;
        $news->description = $request->description;

        $news->update();

        return back();
    }

    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news');
    }

    public function getAllNews()
    {
        $news = News::orderBy('id', 'DESC')->get();

        return view('news', [
            'news' => $news
        ]);
    }

    public function article($id)
    {
        $news = News::find($id);

        return view('article', [
            'article' => $news
        ]);
    }
}
