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
            'list' => '[{"text":"1 pracownik"},{"text":"Bez zobowi\u0105za\u0144"},{"text":"Bezp\u0142atna pomoc techniczna"},{"text":"Pe\u0142na funkcjonalno\u015b\u0107 aplikacji"}]',
        ]);

        Tariff::create([
            'title' => 'Basic',
            'price' => 149,
            'announce' => 'Mały zespół',
            'detail_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, aperiam asperiores at atque consequatur corporis deleniti dolores dolorum ducimus ea eos error facere id laboriosam laborum magni maiores mollitia natus nisi nostrum provident quae quibusdam quis reiciendis sapiente sed sequi soluta temporibus ullam vel velit vero voluptate! Consequuntur, sunt!',
            'trial' => 30,
            'list' => '[{"text":"Do 5 pracownik\u00f3w"},{"text":"Bez zobowi\u0105za\u0144"},{"text":"Bezp\u0142atna pomoc techniczna"},{"text":"Pe\u0142na funkcjonalno\u015b\u0107 aplikacji"}]',
        ]);

        Tariff::create([
            'title' => 'Medium',
            'price' => 229,
            'announce' => 'Duży zespół',
            'detail_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, aperiam asperiores at atque consequatur corporis deleniti dolores dolorum ducimus ea eos error facere id laboriosam laborum magni maiores mollitia natus nisi nostrum provident quae quibusdam quis reiciendis sapiente sed sequi soluta temporibus ullam vel velit vero voluptate! Consequuntur, sunt!',
            'trial' => 30,
            'annotation_id' => 1,
            'list' => '[{"text":"Do 10 pracownik\u00f3w"},{"text":"Bez zobowi\u0105za\u0144"},{"text":"Bezp\u0142atna pomoc techniczna"},{"text":"Pe\u0142na funkcjonalno\u015b\u0107 aplikacji"}]',
        ]);

        Tariff::create([
            'title' => 'Pro',
            'price' => 349,
            'announce' => 'No limit',
            'detail_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet, aperiam asperiores at atque consequatur corporis deleniti dolores dolorum ducimus ea eos error facere id laboriosam laborum magni maiores mollitia natus nisi nostrum provident quae quibusdam quis reiciendis sapiente sed sequi soluta temporibus ullam vel velit vero voluptate! Consequuntur, sunt!',
            'trial' => 30,
            'list' => '[{"text":"Do 10 pracownik\u00f3w"},{"text":"Bez zobowi\u0105za\u0144"},{"text":"Bezp\u0142atna pomoc techniczna"},{"text":"Pe\u0142na funkcjonalno\u015b\u0107 aplikacji"}]',
        ]);
    }
}
