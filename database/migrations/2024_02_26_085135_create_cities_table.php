<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('cities')) {
            Schema::create('cities', function (Blueprint $table) {
                $table->bigIncrements('city_id');
                $table->string('city_name_ar');
                $table->string('city_name_en');
                $table->bigInteger('country_id')->unsigned();
                $table->timestamps();
                $table->foreign('country_id')->references('id')->on('countries');

            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
