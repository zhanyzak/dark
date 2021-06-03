<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Event extends Model
{
    use Translatable;

    protected $translatable = ['name', 'body'];
}
