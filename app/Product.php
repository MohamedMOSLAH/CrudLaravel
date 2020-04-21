<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    public function pictures()
    {
        return $this->hasMany('App\Picture');
    }
    public function mark()
    {
        return $this->belongsTo('App\Mark');
    }
}
