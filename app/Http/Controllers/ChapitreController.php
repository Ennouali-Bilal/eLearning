<?php

namespace App\Http\Controllers;

use App\Chapitre;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request,[
           'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4'
        ]);

        if($request->hasFile('video')){
            echo "ça marche";
            $fileNameWithExt = $request->file('video')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('video')->getClientOriginalExtension();

            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            $path = $request->file('video')->storeAs('public/videos', $fileNameToStore);
        }else{
            $fileNameToStore = 'novideo.avi';
        }

        $chapter = new Chapitre();
        $chapter->titre = $request->input('titre');
        $chapter->video = $fileNameToStore;
    }
}
