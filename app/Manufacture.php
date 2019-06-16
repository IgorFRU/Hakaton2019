<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Manufacture extends Model
{
    protected $fillable = ['manufacture'];

    public $timestamps = false;

    public function good() {
        return $this->hasMany(Good::class);
    }
}
