<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zipcode')->nullable();
            $table->string('country');
            $table->integer('phone')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shippings');
    }
}
