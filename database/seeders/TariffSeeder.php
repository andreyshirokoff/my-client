<?php

namespace Database\Seeders;

use App\Models\Tariff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Role;


class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tariff::create([
            'title' => 'Solo',
            'price' => 99,
            'announce' => 'Dla Ciebie',
            'detail_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, aperiam asperiores at atque consequatur corporis deleniti dolores dolorum ducimus ea eos error facere id laboriosam laborum magni maiores mollitia natus nisi nostrum provident quae quibusdam quis reiciendis sapiente sed sequi soluta temporibus ullam vel velit vero voluptate! Consequuntur, sunt!',
            'trial' => 30,
        ]);

        Tariff::create([
            'title' => 'Basic',
            'price' => 149,
            'announce' => 'Mały zespół',
            'detail_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, aperiam asperiores at atque consequatur corporis deleniti dolores dolorum ducimus ea eos error facere id laboriosam laborum magni maiores mollitia natus nisi nostrum provident quae quibusdam quis reiciendis sapiente sed sequi soluta temporibus ullam vel velit vero voluptate! Consequuntur, sunt!',
            'trial' => 30,
        ]);

        Tariff::create([
            'title' => 'Medium',
            'price' => 229,
            'announce' => 'Duży zespół',
            'detail_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, aperiam asperiores at atque consequatur corporis deleniti dolores dolorum ducimus ea eos error facere id laboriosam laborum magni maiores mollitia natus nisi nostrum provident quae quibusdam quis reiciendis sapiente sed sequi soluta temporibus ullam vel velit vero voluptate! Consequuntur, sunt!',
            'trial' => 30,
            'annotation_id' => 1,
        ]);

        Tariff::create([
            'title' => 'Pro',
            'price' => 349,
            'announce' => 'No limit',
            'detail_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, aperiam asperiores at atque consequatur corporis deleniti dolores dolorum ducimus ea eos error facere id laboriosam laborum magni maiores mollitia natus nisi nostrum provident quae quibusdam quis reiciendis sapiente sed sequi soluta temporibus ullam vel velit vero voluptate! Consequuntur, sunt!',
            'trial' => 30,
        ]);
    }
}
