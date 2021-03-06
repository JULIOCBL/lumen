<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount',10,2);
            $table->unsignedBigInteger('organization_id')->nullable()->unsigned();
            $table->foreign('organization_id')->references('id')->on('organizations')->nullable();
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
        Schema::dropIfExists('organization_payments');
    }
}
