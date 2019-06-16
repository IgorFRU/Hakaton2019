<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdrCity extends Model
{
    public function adress() {
        return $this->hasMany(Adress::class);
    }
}
