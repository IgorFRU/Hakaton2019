<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function city() {
        return $this->belongsTo(AdrCity::class);
    }

    public function number() {
        return $this->belongsTo(AdrNumber::class);
    }

    public function street() {
        return $this->belongsTo(AdrStreet::class);
    }

    public function type() {
        return $this->belongsTo(AdrType::class);
    }
}
