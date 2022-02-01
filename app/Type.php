<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Tattoo;

class Type extends Model
{
    public function tattoos(){
        return $this->hasMany(Tattoo::class);
    }
}
