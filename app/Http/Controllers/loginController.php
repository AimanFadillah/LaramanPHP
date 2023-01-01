<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    
    public function index() {
        return view("login.index",[
            "tittle" => "login",
        ]);
    }

        public function authenticate(Request $request){

            $verifikasi = $request->validate([
                "email" => "required|email:dns|",
                "password" => "required"
            ]);

            if(Auth::attempt( $verifikasi )){
                $request->session()->regenerate();
                return redirect()->intended("/");
            }

            return back()->with("loginGagal","Login anda Gagal");
        }

        public function logout(Request $request){
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect("/");
        }

}
