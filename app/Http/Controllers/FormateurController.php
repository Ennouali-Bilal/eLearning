<?php

namespace App\Http\Controllers;

use App\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    //
    public function getCourses($id = null){
        $cour = Formateur::find($id);
        if($id == null OR !isset($cour))
            return redirect()->route('all');

        $cours = $cour->cours;
        $arr = Array('cours' => $cours);
        return view('formateurCourses',$arr);
    }
}
