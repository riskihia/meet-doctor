<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type_users = [
            [
                "name" => "Admin",
            ],
            [
                "name" => "Dokter",
            ],
            [
                "name" => "Pasien",
            ],
        ];

        foreach ($type_users as $type_user) {
            TypeUser::create($type_user);
        }
    }
}
