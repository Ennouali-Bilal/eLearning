<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    /*public function cour()
    {
        return $this->belongsToMany('App\Cour');
    }
    */

    public function cours(){
        return $this->belongsToMany('App\Cour');
    }
}
