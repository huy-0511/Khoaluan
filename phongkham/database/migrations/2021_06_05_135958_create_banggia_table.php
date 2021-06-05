<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanggiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banggia', function (Blueprint $table) {
            $table->id('idbanggia');
            $table->string('tendichvu')->nullable();
            $table->string('donvi')->nullable();
            $table->string('dongia')->nullable();
            $table->Integer('idichvu')->nullable();
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
        Schema::dropIfExists('banggia');
    }
}
