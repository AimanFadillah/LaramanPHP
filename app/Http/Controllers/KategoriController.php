<?php

namespace App\Http\Controllers;
use App\Models\kategori;


class KategoriController extends Controller
{
    public function index(){
        return view("kategori",[
            "tittle" => "kategori",
            "kategori" => kategori::all()
        ]);
    }


    public function pilih(kategori $kategori){
        return view("projeck",[
            "tittle" => "kategori",
            "judul" => "Kategori : " . $kategori->namaKategori,
            "nama" => $kategori->namaKategori,
            "kumpulan_projeck" => $kategori->projeck->load("user","kategori")
        ]);
    } 
}
