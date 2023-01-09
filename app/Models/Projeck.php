<?php

namespace App\Models;

use App\Http\Controllers\projeckControlller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Projeck extends Model
{
    use HasFactory;

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

    protected $fillable = [
        'title',
        'slug',
        'body',
        'excerpt',
        'img',
        'kategori_id',
        'user_id',
    ];

    // protected $guarded = ["id"];

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

    public function getRouteKeyName(){
        return 'slug';
    }

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

        
    protected $with = ["kategori","user"];
}

