<?php

namespace App\Http\Controllers;
use App\Cour_etudiant;
use App\Etudiant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

class EtudiantCourController extends Controller
{
    //
    public function getCourses($id=null){
        $courses = DB::table('cour_etudiants')->where('etudiant_id','=',$id)->get();
        if($id == null OR !isset($courses))
            return redirect()->route('all');


        foreach ($courses as $valeur)
            $indice[] = $valeur->cour_id;

        //$cour_id = DB::table('cours')->where('id','=',)

        foreach ($indice as $valeur)
        {
            $cours[] = DB::table('cours')->where('id','=',$valeur)->get();
        }

        $arr = Array('cours' => $cours);
        return view('etudiantCourses',$arr);
    }

    public function followCours($idEtudiant=null,$idCours=null)
    {
        //echo "Hello";
        if($idEtudiant == null || $idCours == null)
            return redirect()->route('all');
        $newfollow = new Cour_etudiant();
        $newfollow->etudiant_id = $idEtudiant;
        $newfollow->cour_id = $idCours;
        $newfollow->save();
        return view('welcome');
    }
}
