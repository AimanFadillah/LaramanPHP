<?php 

namespace App\Models;


class Projeck {
    // object
    private static $isiProjeck = [
        [
            "judul" => "Naruto",
            "slug" => "naruto",
            "pembuat" => "aiman",
            "prolog" => "naruto jadi yatim dan sengsara oleh hokage tiga yaitu puan eh maksudnya hiruzen"
        ],
        [
            "judul" => "Venom",
            "slug" => "venom",
            "pembuat" => "sendiri",
            "prolog" => "kerasukan bau bau kehidupan diseorang manusia dan ingin merasakan daging tersebut"
        ],
         [
            "judul" => "Batman",
            "slug" => "batman",
            "pembuat" => "Jack Snyder",
            "prolog" => "Super power adalah kaya    "
        ],
    ];

    public static function semua() {
       return collect( self::$isiProjeck );
    }

    public static function satuan($slug){
        $isiProjeck = static::semua();
        // $projeck = [];
        // foreach($isiProjeck as $isiProjecknya){
        //     if ($isiProjecknya["slug"] === $slug){
        //         $projeck = $isiProjecknya;
        //     }
        // };
        return $isiProjeck->firstWhere("slug",$slug);
    } 

}


?>