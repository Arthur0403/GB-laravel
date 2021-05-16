<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function latestNews()
    {
        return view('pages.latest-news');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function categories()
    {
        return view('pages.categories');
    }

    public function news($news)
    {
        $news = explode('-', $news);
        foreach($news as $key => $item)
        {
            $news[$key] = ucfirst($item);
        }
        $news = implode(' ', $news);

        return view('pages.news', ['news' => $news]);
    }

    public function error()
    {
        abort(404, 'Oops, page not found!');
    }
}
