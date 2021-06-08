<?php
namespace App\Repositories;

use App\Models\Faq;

class FaqRepository {
    public static function getAll()
    {
        return Faq::where('isActive', 1)->orderBy('order', 'asc')->get();
    }
}