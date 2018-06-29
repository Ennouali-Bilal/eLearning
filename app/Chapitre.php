<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    //
    public function cour()
    {
        return $this->belongsTo('App\Cour');
    }
}
