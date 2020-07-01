<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('donation_id')->unsigned();
            $table->foreign('donation_id')->references('id')->on('donations');
            $table->string('itemable_type');
            $table->bigInteger('itemable_id');
            $table->double('quantity');
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
        Schema::dropIfExists('donation_type');
    }
}
