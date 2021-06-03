<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as VoyagerCategory;

class Category extends VoyagerCategory
{
    use HasFactory;

    protected $table = 'categories';

    protected $translatable = ['name'];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function childs() 
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
}
