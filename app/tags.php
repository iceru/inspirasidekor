<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posts;

class tags extends Model
{
    public function posts() {
        return $this->belongsToMany(Posts::class);
    }
}
