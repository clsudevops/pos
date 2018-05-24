<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('name', 150);
            $table->text('logo');
            $table->string('address', 150);
            $table->string('phonenumber', 150);
            $table->string('email', 150);
            $table->string('color', 50);
            $table->string('website', 150);
            $table->text('createdBy')->foreign('createdBy')->references('uuid')->on('users');
            $table->text('modifiedBy')->foreign('modifiedBy')->references('uuid')->on('users');
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
        Schema::dropIfExists('locations');
    }
}
