<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Pape Moussa Fall",
                "email" => "papemoussaFall@gmail.com",
                "matricule" => "p2515625",
                "password" => "12345",
                "role" => "etudiant",

            ],
            [
                "name" => "Ibrahima Sall",
                "email" => "ibrahimaSall@gmail.com",
                "matricule" => "p12345",
                "password" => "12345",
                "role" => "etudiant",
            ],
            [
                "name" => "Khadim Mane",
                "email" => "khadimmane@gmail.com",
                "matricule" => "p123456",
                "password" => "12345",
                "role" => "etudiant"
            ],
            [
                "name" => "Moussa Gaye",
                "email" => "moussagaye@gmail.com",
                "matricule" => "p1234567",
                "password" => "12345",
                "role" => "etudiant"
            ]
        ];
        User::insert($users);
        Etudiant::insert([
            [
                "user_id" => 1,
                "date_naissance" => "1996-12-18",
                "photo" => "photo",
                "qr_code" => QrCode::size(512)
                    ->generate("papemoussaFall@gmail.com")
            ],
            [
                "user_id" => 2,
                "date_naissance" => "1996-12-18",
                "photo" => "photo",
                "qr_code" => QrCode::size(512)
                    ->generate("ibrahimaSall@gmail.com")
            ],
            [
                "user_id" => 3,
                "date_naissance" => "1996-12-18",
                "photo" => "photo",
                "qr_code" => QrCode::size(512)
                    ->generate("khadimmane@gmail.com")
            ],
            [
                "user_id" => 4,
                "date_naissance" => "1996-12-18",
                "photo" => "photo",
                "qr_code" => QrCode::size(512)
                    ->generate("moussagaye@gmail.com")
            ],

        ]);
    }
}
