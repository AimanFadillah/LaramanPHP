<?php

namespace App\Http\Controllers;
use App\Models\Projeck;


class ProjeckController extends Controller {

    public function index(){

        return view('projeck',[
            "tittle" => "projeck",
            "judul" => "Projeck-Projeck",
            "kumpulan_projeck" => projeck::latest()->Cari( request(["cari","kategori","user"]) )->get()
        ]);

    }

    public function dalamprojeck(Projeck $Projeck){
        return view('dalamprojeck',[
            "tittle" => "Projeck",
            "projeck" => $Projeck
        ]);
    }

}




?>