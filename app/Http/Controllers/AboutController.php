<?php

namespace App\Http\Controllers;

class AboutController extends Controller {

    public function index(){
        return View('about',[
           "tittle" => "about",
           "nama" => "Muhamad Aiman Fadillah",
           "sambut" => "salamat siang hadirin yang berbahagia"
        ]);
    }

}



?>