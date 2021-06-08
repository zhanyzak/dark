<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CTA extends Model
{
    use HasFactory, Translatable;

    protected $table = 'ctas';
    protected $translatable = ['h1_text', 'p_text'];

}
