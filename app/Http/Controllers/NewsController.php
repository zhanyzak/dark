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
        return view('web.pages.news.index',['news' => $news]);
    }
}
