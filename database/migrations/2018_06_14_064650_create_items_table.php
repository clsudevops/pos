<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('name', 150);
            $table->string('code', 50);
            $table->string('barcode', 150);
            $table->double('unit_cost', 8, 2);
            $table->double('unit_price', 8, 2);
            $table->integer('stock');
            $table->integer('beginning');
            $table->string('category_code', 150);
            $table->integer('warranty');
            $table->boolean('discontinued');
            $table->double('price_limit', 8, 2);
            $table->double('markup_rate', 8, 2);
            $table->double('markup', 8, 2);
            $table->boolean('part_of_inventory');
            $table->boolean('serial_is_required');
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
        Schema::dropIfExists('items');
    }
}
