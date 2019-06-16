<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['status'];

    public $timestamps = false;

    public function order() {
        return $this->hasMany(Order::class);
    }
}
