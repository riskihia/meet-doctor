<?php

namespace Database\Seeders;

use App\Models\MasterData\Specialist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialists = [
            [
                "name" => "Dermatology",
                "price" =>'250000'
            ],
            [
                "name" => "Dentist",
                "price" =>'450000'
            ],
            [
                "name" => "Endodentics",
                "price" =>'150000'
            ],
            [
                "name" => "General Dentistry",
                "price" =>'120000'
            ],
            [
                "name" => "Oral and Maxillofacial Surgery",
                "price" =>'80000'
            ],
            [
                "name" => "Orthodentics",
                "price" =>'900000'
            ],
            [
                "name" => "Pediatric Dentistry",
                "price" =>'300000'
            ],
            [
                "name" => "Radiology",
                "price" =>'180000'
            ],
            [
                "name" => "Surgery",
                "price" =>'440000'
            ],
            [
                "name" => "Urology",
                "price" =>'290000'
            ],
            [
                "name" => "Periodontics",
                "price" =>'50000'
            ],
            [
                "name" => "Prosthodontics",
                "price" =>'150000'
            ],
        ];
        
        foreach ($specialists as $specialist) {
            Specialist::create($specialist);
        }        
    }
}
