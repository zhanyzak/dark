<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EventRepository;

class EventController extends Controller
{
    public function index(EventRepository $eventRepository)
    {
        $events = $eventRepository->getAll();

        return view('web.pages.events.index', ['events' => $events]);
    }
}
