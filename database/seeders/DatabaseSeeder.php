<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projeck;
use App\Models\kategori;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        projeck::factory(10)->create();

        // projeck::create([
        //     "title" => "Kayang Push Up",
        //     "user_id" => "1",
        //     "kategori_id" => "2",
        //     "slug" => "kayangpushup",
        //     "excerpt" => "singkat  push up",
        //     "body" => "kumplit kayang"
        // ]);

        // projeck::create([
        //     "title" => "Batman",
        //     "user_id" => "1",
        //     "kategori_id" => "1",
        //     "slug" => "batman",
        //     "excerpt" => "batman ketika berdekatan dengan teman superhero 😫",
        //     "body" => "batman ketika sendirian 😎 "
        // ]);

        // projeck::create([
        //     "title" => "Naruto",
        //     "user_id" => "1",
        //     "kategori_id" => "1",
        //     "slug" => "naruto",
        //     "excerpt" => "melihat boruto 😫",
        //     "body" => "melihat naruto 😎 "
        // ]);


        kategori::create([
            "namaKategori" => "Action",
            "slug" => "action"
        ]);

        kategori::create([
            "namaKategori" => "Horror",
            "slug" => "horror"
        ]);

        kategori::create([
            "namaKategori" => "Romance",
            "slug" => "romance"
        ]);

        user::create([
            "name" => "Aiman Fadillah",
            "email" => "aiman@gmail.com",
            "password" => bcsqrt('123')
        ]);

       
        
        
    }
}
