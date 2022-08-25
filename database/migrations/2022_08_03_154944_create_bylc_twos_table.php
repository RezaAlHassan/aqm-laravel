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
        Schema::create('bylc_twos', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->double('dhaka', 5, 2);
            $table->double('rajshahi', 5, 2);
            $table->double('sylhet', 5, 2);
            $table->double('rangpur', 5, 2);
            $table->double('chittagong', 5, 2);
            $table->double('khulna', 5, 2);
            $table->double('barishal', 5, 2);
            $table->double('average', 5, 2);
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
        Schema::dropIfExists('bylc_twos');
    }
};
