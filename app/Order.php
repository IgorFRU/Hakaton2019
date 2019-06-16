<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $fillable = ['number', 'customer_id', 'good_id', 'good_quantity', 'good_price'];
    

    public function customer() {
        return $this->hasMany(Customer::class);
    }

    public function good() {
        return $this->hasMany(Good::class);
    }
}
