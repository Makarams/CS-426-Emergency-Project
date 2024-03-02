<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadTrafficIncidentReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_traffic_incident_reports', function (Blueprint $table) {
            $table->id();
            $table->string('reporter_name')->nullable();
            $table->string('reporter_contact')->nullable();
            $table->string('incident_location')->nullable();
            $table->text('incident_description')->nullable();
            $table->string('emergency_assistance')->nullable();
            $table->string('contact_reporter')->nullable();
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
        Schema::dropIfExists('road_traffic_incident_reports');
    }
}