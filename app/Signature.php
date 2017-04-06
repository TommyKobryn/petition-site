<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable = ['firstname' , 'lastname'];

    public function petition()
    {
      return $this->belongsTo(Petition::class);
    }
}
