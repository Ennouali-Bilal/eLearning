<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    //
    public function formateur()
    {
        return $this->belongsTo('App\Formateur');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    /*public function etudiant()
    {
        return $this->belongsToMany('App\Etudiant');
    }
    */

    public function etudiants(){
        return $this->belongsToMany('App\Etudiant');
    }

    public function chapitres()
    {
        return $this->hasMany('App\Chapitre','cour_id');
    }
}
