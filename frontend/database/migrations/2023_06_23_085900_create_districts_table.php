<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDistrictsTable extends Migration
{
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('district_name');
            $table->timestamps();
        });

        // Insert the district data
        $districts = [
            ['district_name' => 'Khan Daun Penh', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Chamkar Mon', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Prampi Makara', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Tuol Kork', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Dangkao', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Mean Chey', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Russey Keo', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Sen Sok', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Chroy Changvar', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Porsenchey', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Preaek Pnov', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Boeung Keng Kang', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Chbar Ampov', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Khan Kamboul', 'created_at' => now(), 'updated_at' => now()],
            ['district_name' => 'Koh Pich', 'created_at' => now(), 'updated_at' => now()],
        ];           

        DB::table('districts')->insert($districts);
    }

    public function down()
    {
        Schema::dropIfExists('districts');
    }
}