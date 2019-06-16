<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Good extends Model
{
    protected $fillable = [
        'image',
        'product_name',
        'description',
        'manufacture_id',
        'quantity',
        'reserve',
        'price'
    ];

    public function manufacture() {
        return $this->belongsTo(Manufacture::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
