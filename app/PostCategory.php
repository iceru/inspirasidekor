<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posts;

class PostCategory extends Model
{
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
}
