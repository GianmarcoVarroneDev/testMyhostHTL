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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('property_email')->unique();
            $table->string('phone_number');
            $table->string('address');
            $table->string('property_type');
            $table->string('city');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('province');
            $table->string('zip_code');
            $table->string('country');
            $table->string('terms_conditions');
            $table->string('img_logo')->default('public\assets\img\sample\photo\1.jpg');
            $table->string('base_color')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
