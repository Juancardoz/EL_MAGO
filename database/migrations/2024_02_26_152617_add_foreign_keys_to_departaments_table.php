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
        Schema::table('departaments', function (Blueprint $table) {
            $table->foreign(['municipalities_id'], 'fk_departament_municipalities1')->references(['id'])->on('municipalities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departaments', function (Blueprint $table) {
            $table->dropForeign('fk_departament_municipalities1');
        });
    }
};
