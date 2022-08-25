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
        Schema::create('bpse_fives', function (Blueprint $table) {
            $table->id();
            $table->string('season');
            $table->double('maximum', 5, 2);
            $table->double('upper', 5, 2);
            $table->double('median', 5, 2);
            $table->double('lower', 5, 2);
            $table->double('minimum', 5, 2);
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
        Schema::dropIfExists('bpse_fives');
    }
};
