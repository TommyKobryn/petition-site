<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    public function signatures()
    {
    return $this->hasMany(Signature::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
