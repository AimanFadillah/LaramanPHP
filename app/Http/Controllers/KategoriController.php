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
 
}
