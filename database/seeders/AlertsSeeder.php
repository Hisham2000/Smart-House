<?php

namespace Database\Seeders;

use App\Models\Alerts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $format = "15:14:10";
        Alerts::create([
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'user_id' => 1
        ]);
    }
}
