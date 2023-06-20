<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role;


class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'name' => 'dollar',
            'symbol' => '$',
            'name_min' => 'cent',
            'symbol_min' => '¢'
        ]);
        Currency::create([
            'name' => 'złoty',
            'symbol' => 'zł',
            'name_min' => 'grosze',
            'symbol_min' => 'gr.'
        ]);
    }
}
