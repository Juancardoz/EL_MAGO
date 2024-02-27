<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_purchases', function (Blueprint $table) {
            $table->integer('id', true)->unique('id_UNIQUE');
            $table->integer('products_id')->index('fk_details_purchases_products1_idx');
            $table->string('purchase_lot', 45);
            $table->string('amount', 45);
            $table->string('unit_value', 45);
            $table->integer('purchases_id')->index('fk_details_purchases_purchases1_idx');
            $table->timestamps();

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_purchases');
    }
};
