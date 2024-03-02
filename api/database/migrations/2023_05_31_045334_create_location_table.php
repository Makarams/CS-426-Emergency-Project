<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{

    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->string('location_name');
            $table->string('address');
            $table->decimal('position_longitude', 9, 6);
            $table->decimal('position_latitude', 9, 6);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('location');
    }
}