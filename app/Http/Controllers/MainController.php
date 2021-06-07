<?php

namespace App\Http\Controllers;

use App\Models\News;
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
        $model = new News();

        return view('pages.categories', [
            'newsList' => $model->newsList(),
        ]);
    }

    public function news($id)
    {
        $model = new News();

        return view('pages.news', ['news' => $model->news($id)]);
    }

    public function error()
    {
        abort(404, 'Oops, page not found!');
    }
}
