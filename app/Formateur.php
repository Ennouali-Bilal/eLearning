<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    //
    public function cours()
    {
        return $this->hasMany('App\Cour','formateur_id');
    }
}
