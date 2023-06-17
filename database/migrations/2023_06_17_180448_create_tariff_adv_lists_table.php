<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tariff_adv_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tariff_id')->nullable(false);
            $table->foreign('tariff_id')->references('id')->on('tariffs');
            $table->string('text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tariff_adv_lists');
    }
};
