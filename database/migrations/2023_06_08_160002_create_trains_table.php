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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('slug', 40)->unique();
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->string('departure_time', 5);
            $table->string('arrival_time', 5);
            $table->smallInteger('code')->unsigned()->unique();
            $table->tinyInteger('carriages')->unsigned();
            $table->boolean('in_time')->nullable();
            $table->boolean('cancelled')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
