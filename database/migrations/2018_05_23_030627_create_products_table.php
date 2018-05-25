<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('companyName', 150);
            $table->string('firstName', 50);
            $table->string('lastName', 150);
            $table->string('email')->unique();
            $table->string('address1',150);
            $table->string('address2', 150);
            $table->string('city', 150);
            $table->string('province', 150);
            $table->text('file_path');
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
        Schema::dropIfExists('products');
    }
}
