<?php

namespace App;

use App\Serie;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function watchable(){
        return $this->morphTo();
    }
}
