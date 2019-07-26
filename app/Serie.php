<?php

namespace App;

use App\Video;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function videos(){
        return $this->morphMany(Video::class, 'watchable');
    }
}
