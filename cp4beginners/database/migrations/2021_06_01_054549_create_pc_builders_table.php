<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_builders', function (Blueprint $table) {
            $table->id();
            $table->string('cpu');
            $table->string('ram');
            $table->string('storage');
            $table->string('gpu');
            $table->string('psu');
            $table->string('motherboard');
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
        Schema::dropIfExists('pc_builders');
    }
}
