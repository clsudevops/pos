<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('name', 150);
            $table->boolean('create_item');
            $table->boolean('edit_item');
            $table->boolean('delete_item');
            $table->boolean('create_customer');
            $table->boolean('edit_customer');
            $table->boolean('delete_customer');
            $table->boolean('create_employee');
            $table->boolean('edit_employee');
            $table->boolean('delete_employee');
            $table->boolean('create_supplier');
            $table->boolean('edit_supplier');
            $table->boolean('delete_supplier');
            $table->boolean('create_transaction');
            $table->boolean('edit_transaction');
            $table->boolean('delete_transaction');
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
        Schema::dropIfExists('user_roles');
    }
}
