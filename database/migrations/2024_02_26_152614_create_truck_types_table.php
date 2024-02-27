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
        Schema::create('truck_types', function (Blueprint $table) {
            $table->integer('id', true)->unique('id_UNIQUE');
            $table->string('plate', 10);
            $table->string('ability', 45);
            $table->integer('routes_id')->index('fk_truck_type_routes1_idx');
            $table->integer('load_id')->index('fk_truck_type_load1_idx');
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
        Schema::dropIfExists('truck_types');
    }
};
