<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Faq extends Model
{
    use Translatable;

    protected $table = 'faqs';

    protected $translatable = ['question', 'answer'];
}
