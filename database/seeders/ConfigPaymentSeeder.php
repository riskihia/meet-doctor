<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config_payments = [
            [
                "fee" => "150000",
                "vat" => "20" //persenan
            ]
        ];

        foreach($config_payments as $config_payment){
            ConfigPayment::create($config_payment);
        }
    }
}
