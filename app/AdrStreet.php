<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdrStreet extends Model
{
    public function adress() {
        return $this->hasMany(Adress::class);
    }
}
