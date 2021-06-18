<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Resources;
use App\Services\ParserService;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $resources = Resources::all();
        return view('admin.resources.index', ['resources' => $resources]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, ParserService $service)
    {
        $resData = $service->getNews($request->input('resource'));
        $resource = Resources::create([
            "resource_name" => $resData["title"],
            "source_link" => $request->input('resource')
        ]);

        $resId = Resources::where('resource_name', $resData["title"])->first()->id;

        foreach($resData["news"] as $news)
        {
            $news = News::create([
                'news_title' => $news["title"],
                'news_description' => $news["description"],
                'author' => $resData["title"],
                'resource_id' => $resId,
                'source_link' => $news["link"],
                'publish_date' => $news["pubDate"],
                ]);
        }


//
//        if($resource)
//        {
            return redirect('admin/news');
//        }
//
//        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}