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
        Schema::table('packets', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->unsignedBigInteger('price')->nullable(false);
            $table->unsignedBigInteger('quantity')->nullable(false);
            $table->string('announce')->nullable(false);
            $table->text('detail_text')->nullable(false);
            $table->unsignedBigInteger('trial');
            $table->boolean('is_test')->default(1)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packets', function (Blueprint $table) {
            //
        });
    }
};
