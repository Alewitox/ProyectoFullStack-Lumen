<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {


    public function series()
    {
        return $this->belongsToMany('App\Serie')
          ->withTimestamps();
    }
}