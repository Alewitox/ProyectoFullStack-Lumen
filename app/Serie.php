<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

    protected $fillable = [
        'title', 'network', 'description', 'creator', 'first_air_date', 'last_air_date'
    ];

    public function actors()
    {
        return $this->belongsToMany('App\Actor')
          ->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
          ->withTimestamps();
    }

    public function episodes()
    {
        return $this->hasMany('App\Episode')
          ->withTimestamps();
    }
  
}