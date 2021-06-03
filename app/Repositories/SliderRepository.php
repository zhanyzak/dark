<?php
namespace App\Repositories;

use App\Models\Slider;

class SliderRepository {
    public static function getAll()
    {
        return Slider::where('isActive', 1)->get();
    }
}