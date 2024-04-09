<?php

namespace Database\Seeders;

use App\Models\MasterData\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consultations = [
            [
                "name" => "Jantung Sesak"
            ],
            [
                "name" => "Tekanan Darah Tinggi"
            ],
            [
                "name" => "Gangguan Irama Jantung"
            ],
        ];

        foreach($consultations as $consultation){
            Consultation::create($consultation);
        }
    }
}
