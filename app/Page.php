<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'body', 'menu_item', 'priority'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
