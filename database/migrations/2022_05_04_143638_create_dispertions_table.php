<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispertionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispertions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_credit_id');
            $table->foreign('user_credit_id')->references('id')->on('user_credits');
            $table->unsignedBigInteger('organization_payment_id');
            $table->foreign('organization_payment_id')->references('id')->on('organization_payments');
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
        Schema::dropIfExists('dispertions');
    }
}
