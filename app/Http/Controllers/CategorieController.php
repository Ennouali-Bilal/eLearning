<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function ofOneCategorie($id = null){
        $cat = Categorie::find($id);
        if($id == null OR !isset($cat))
            return redirect()->route('all');
         $cours=$cat->cours;
         $arr = Array('cours' => $cours);
         return view('CourseCategorie',$arr);
    }
}
