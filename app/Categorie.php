<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    public function cours()
    {
        return $this->hasMany('App\Cour','categorie_id');
    }
}
