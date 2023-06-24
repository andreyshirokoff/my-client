<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Tariff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role;


class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'file_title' => ''
        ]);
    }
}
