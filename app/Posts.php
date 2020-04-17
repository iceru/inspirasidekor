<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostCategory;
use App\tags;

class Posts extends Model
{
    protected $guarded = [];

    public function postcategory() 
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function tags() {
        return $this->belongsToMany(tags::class);
    }
}
