<?php

namespace Database\Seeders;

use App\Models\TariffAnnotation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role;


class TariffAnnotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TariffAnnotation::create([
            'title' => 'UDERZYĆ!',
            'text' => 'Wybrany przez 60% klientów',
        ]);
    }
}
