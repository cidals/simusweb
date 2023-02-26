<?php

namespace Database\Seeders;

use App\Models\Risk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Risk::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Rendah', 'Menengah Rendah', 'Menengah Tinggi', 'Tinggi',
        ];

        foreach ($data as $value) 
        {
            Risk::insert([
                'name' => $value,
            ]);
        }
    }
}
