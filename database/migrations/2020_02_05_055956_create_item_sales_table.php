<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('total_cost');
            $table->integer('quantity');
            $table->string('type');
            $table->string('user_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('servicings')->onDelete('cascade');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('inventories')->onDelete('cascade');
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
        Schema::dropIfExists('item_sales');
    }
}
