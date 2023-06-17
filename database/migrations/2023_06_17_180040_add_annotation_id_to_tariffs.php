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
        Schema::table('tariffs', function (Blueprint $table) {
            $table->unsignedBigInteger('annotation_id')->after('trial');
            $table->foreign('annotation_id')->references('id')->on('tariff_annotation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tariffs', function (Blueprint $table) {
            Schema::table('tariffs', function (Blueprint $table) {
                $table->dropForeign(['annotation_id']);
                $table->dropColumn('annotation_id');
            });
        });
    }
};
