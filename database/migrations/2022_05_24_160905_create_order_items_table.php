<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->text('orderId');
            $table->text('proId');
            $table->text('productName');
            $table->text('size');
            $table->text('color');
            $table->text('qty');
            $table->text('price');
            $table->text('subtotal');
            $table->text('codepromo')->nullable();
            $table->text('livraison');
            $table->text('total');
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
        Schema::dropIfExists('order_items');
    }
}
