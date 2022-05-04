<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreLocationsCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_locations_catalogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('routes_location_id');
            $table->foreign('routes_location_id')->references('id')->on('routes_locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_locations_catalogs');
    }
}
