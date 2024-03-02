<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostAndFoundPropertyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_and_found_property_reports', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('property_type')->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->date('date')->nullable();
            $table->string('contact_owner')->nullable();
            $table->boolean('consent')->default(false)->nullable();
            $table->boolean('isSolve')->default(false)->nullable();
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
        Schema::dropIfExists('lost_and_found_property_reports');
    }
    
}