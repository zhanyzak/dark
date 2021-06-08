<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Repositories\NewsRepository;

class NewsController extends Controller
{
    public function index(NewsRepository $newsRepository)
    {
        $news = $newsRepository->getAll();
        $other_news = $newsRepository->getAll()->take(5);
        return view('web.pages.news.index',['news' => $news, 'other_news' => $other_news]);
    }

    public function show(Request $request, NewsRepository $newsRepository)
    {
        $news_item = $newsRepository->getBySlug($request);

        return view('web.pages.news.show', ['news_item' => $news_item]);
    }
}
