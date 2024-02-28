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
        if (!Schema::hasTable('neighborhoods')) {
            Schema::create('neighborhoods', function (Blueprint $table) {
                $table->bigIncrements('neighborhood_id');
                $table->string('neighborhood_name_ar');
                $table->string('neighborhood_name_en');
                $table->bigInteger('city_id')->unsigned();
                $table->timestamps();
                $table->foreign('city_id')->references('id')->on('cities');

            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighborhoods');
    }
};
