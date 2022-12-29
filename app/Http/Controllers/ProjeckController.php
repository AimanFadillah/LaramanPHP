<?php

namespace App\Http\Controllers;
use App\Models\Projeck;
use App\Models\kategori;
use App\Models\User;


class ProjeckController extends Controller {

    public function index(){

        $judul = "";

        if( request("kategori") ){
            $kategori = kategori::firstWhere("slug", request("kategori") );
            $judul = " Tema " . $kategori->namaKategori;
        }

        if( request("user") ){
            $user = user::firstWhere("name", request("user") );
            $judul = " oleh " . $user->name;
        }

        return view('projeck',[
            "tittle" => "projeck",
            "judul" => "Projeck" . $judul,
            "kumpulan_projeck" => projeck::latest()->Cari( request(["cari","kategori","user"]) )->paginate(7)
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