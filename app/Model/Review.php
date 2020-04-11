<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function product(){
        return $this->belongTo('App\Model\Product');
    }
}
