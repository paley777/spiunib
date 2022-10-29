<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.news.index', [
            'active' => 'news',
            'newses' => News::orderBy('created_at', 'desc')
                ->filter(request(['search']))
                ->paginate(10)
                ->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create', [
            'active' => 'news',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $validatedData = $request->validate([
            'creator' => 'required',
            'title' => 'required',
            'body' => 'required',
            'thumbnail' => 'required',
        ]);
        News::create($validatedData);

        return redirect('/dashboard/news')->with('success', 'Berita baru telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('dashboard.news.details', [
            'active' => 'news',
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', [
            'news' => $news,
            'active' => 'news',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $rules = [
            'id' => 'required',
            'creator' => 'required',
            'title' => 'required',
            'body' => 'required',
            'thumbnail' => 'required',
        ];
        $validatedData = $request->validate($rules);
        News::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/dashboard/news')->with('success', 'Berita telah diubah!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);

        return redirect('/dashboard/news')->with('success', 'Berita telah dihapus.');
    }
}
