<?php
namespace App\Repositories;

use App\Models\Event;
use Illuminate\Http\Request;

class EventRepository {
    /**получание всех событии */
    public static function getAll()
    {
        return Event::where('isActive', 1)->orderBy('start_date', 'desc')->get();
    }

    /**получить событие по слагу */
    public static function getBySlug(Request $request)
    {
        return Event::where('isActive', 1)->where('slug', $request->slug)->first();
    } 
}