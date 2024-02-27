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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->integer('id', true)->unique('id_UNIQUE');
            $table->string('nit', 45);
            $table->string('supplier_name', 45);
            $table->integer('cell_phone');
            $table->string('mail', 45)->nullable();
            $table->string('address', 45)->nullable();
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
        Schema::dropIfExists('suppliers');
    }
};
