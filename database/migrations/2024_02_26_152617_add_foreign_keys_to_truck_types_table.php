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
        Schema::table('truck_types', function (Blueprint $table) {
            $table->foreign(['load_id'], 'fk_truck_type_load1')->references(['id'])->on('load')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['routes_id'], 'fk_truck_type_routes1')->references(['id'])->on('routes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('truck_types', function (Blueprint $table) {
            $table->dropForeign('fk_truck_type_load1');
            $table->dropForeign('fk_truck_type_routes1');
        });
    }
};
