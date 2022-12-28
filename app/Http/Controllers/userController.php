<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{

    public function index(){
        return view("user",[
            "tittle" => "user",
            "user" => User::all()
        ]);
    }
    
    public function userProjeck(User $user){
        return view("projeck",[
            "tittle" => "projeck",
            "judul" => "Projeck User : " . $user->name,
            "kumpulan_projeck" => $user->projeck->load("kategori","user"),
            "namaUser" => $user->name
        ]);
    }


}
