<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('transId');
            $table->uuid('uuid');
            $table->text('description');
            $table->timestamp('transDate');
            $table->double('amount', 8, 2);
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
        Schema::dropIfExists('expenses');
    }
}
