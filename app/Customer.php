<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer'];
    
    public $timestamps = false;

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
