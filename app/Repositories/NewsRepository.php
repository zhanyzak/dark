<?php
namespace App\Repositories;

use App\Models\News;
use Illuminate\Http\Request;

class NewsRepository {
    /**Method get all */
    public static function getAll()
    {
        return News::where('isActive', 1)->orderBy('created_at', 'desc')->get();
    }
    /**Method get by slug */
    public static function getBySlug(Request $request) 
    {
        return News::where('slug', $request->slug)->where('isActive', 1)->first();
    }
}