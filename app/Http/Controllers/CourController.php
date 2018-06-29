<?php

namespace App\Http\Controllers;

use App\Cour;
use Illuminate\Http\Request;

class CourController extends Controller
{
    //
    public function ViewAll(){
        $cours = Cour::all();
        $arr = Array('cours' => $cours);
        return view('allCourses',$arr);
    }

    public function getChapitres($id = null){
        $chp = Cour::find($id);
        if($id == null OR !isset($chp))
            return redirect()->route('all');
        $chapitres = $chp->chapitres;
        $arr = Array('chapitres' => $chapitres);
        return view('courseChapitre',$arr);
    }

    public function addCours(Request $request){
        if($request->ismethod('post')){
            $newCours = new Cour();
            $newCours->titre = $request->input('titre');
            $newCours->categorie_id = $request->input('categorie');
            $newCours->formateur_id = $request->input('formateur');
            $newCours->description = $request->input('description');
            $newCours->save();



            $arr = Array('nombreChapitres' => $request->input('numero'), 'courId' => $newCours->id);
            $tableau = Array('tableau' => $arr);
            return view('addChapters',$tableau);
        }
        else
            return view('addCours');
    }

}
