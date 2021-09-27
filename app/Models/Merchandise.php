<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model{
   
    public function category() {
        return $this->belongsTo('App\Category');
    }
    public function unit() {
        return $this->belongsTo('App\unit');
    }
    use HasFactory;
}
