<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Type;

class Tattoo extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'color',
        'type_id',
        'artist_id'
    ];
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
