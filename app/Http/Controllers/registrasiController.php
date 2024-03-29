<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class registrasiController extends Controller
{
    public function index () {
        return view("registrasi.index",[
            "tittle" => "registrasi"
        ]);
    }

    public function store (Request $request ) {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "email" => "required|email:dns|unique:users",
            "password" => "required|max:255|min:3"
        ]);

        $validatedData["password"] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect("/login")->with("berhasil","Selamat Registrasi Berhasil");
    }
    
}
