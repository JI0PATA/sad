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
        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;

        if ($request->type == 0) {
            mail('wanja_shukov@mail.ru', 'Вопрос от пользователя', "Имя: {$name}\nE-mail: {$email}\n Комментарий: {$comment}");
        } else {
            $review = new Review;

            $review->name = $name;
            $review->email = $email;
            $review->comment = $comment;

            $review->save();
        }

        return back();
    }

    public function subscribe(Request $request)
    {
        $birthdate = $request->birthdate;
        $name = $request->name;
        $call = $request->call;
        mail('wanja_shukov@mail.ru', 'Запись на приём', "Дата рождения ребёнка: {$birthdate}\nФИО заявителя: {$name}\nТелефон заявителя: {$call}");
    }
}
