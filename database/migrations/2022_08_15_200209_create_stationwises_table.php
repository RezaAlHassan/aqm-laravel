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
        Schema::create('stationwises', function (Blueprint $table) {
            $table->id();
            $table->string('district');
            $table->integer('station');
            $table->string('organization');
            $table->string('season');
            $table->double('pm',5,2);
            $table->double('aqi',5,2);
            $table->timestamps()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stationwises');
    }
};
