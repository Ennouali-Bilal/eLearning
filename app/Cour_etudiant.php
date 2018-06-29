<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour_etudiant extends Model
{
    //
    public function cours()
    {
        return $this->hasMany('App\Cour','cour_id');
    }

    public function etudiants()
    {
        return $this->hasMany('App\Cour','etudiant_id');
    }
}
