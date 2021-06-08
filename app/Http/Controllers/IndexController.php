<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{SliderRepository, NewsRepository, EventRepository, FaqRepository};
use App\Models\Slider;

class IndexController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $sliders = SliderRepository::getAll()->take(5);
        $news = NewsRepository::getAll()->take(6);
        $events = EventRepository::getAll()->take(4);
        $faq_lists = FaqRepository::getAll();
        return view('web.index', ['sliders' => $sliders, 'news' => $news, 'events' => $events, 'faq_lists' => $faq_lists]);
    }
}
