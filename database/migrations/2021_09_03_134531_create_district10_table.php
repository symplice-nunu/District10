<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrict10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district10', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->string('emailaddress');
            $table->string('chapter');
            $table->string('position');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('zipcode');
            $table->string('contact');
            $table->string('phone');
            $table->string('fax');
            $table->string('website');
            $table->string('image');
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
        Schema::dropIfExists('district10');
    }
}
