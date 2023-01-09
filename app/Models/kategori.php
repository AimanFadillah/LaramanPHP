<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    // protected $fillable = [
    //     'namaKategori',
    //     'slug'
    // ];


    public function projeck(){
        return $this->hasMany(Projeck::class);
    }
}
