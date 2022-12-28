<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeck extends Model
{
    use HasFactory;

    public function scopeCari($query , array $data){

        $query->when( $data["cari"] ?? false , function($query , $cari ) {
            return $query->where("title","like","%" . $cari . "%");
        });

        $query->when( $data["kategori"] ?? false, function($query , $kategori) {

            return $query->whereHas("kategori" , function ($query) use($kategori) {
                $query->where("slug",$kategori);
            });

        });

        // ero function

        $query->when( $data["user"] ?? false , fn ($query,$user) =>  
                $query->whereHas( "user", fn ($query) => 
                $query->where("name","like", "%" . $user . "%" )   
            )
        );
        
    }

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $guarded = ["id"];
    protected $with = ["kategori","user"];
}
