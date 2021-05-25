<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lichhen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichhen', function (Blueprint $table) {
            $table->id();
            $table->string('mota');
            $table->Integer('dichvu');
            $table->string('ngay');
            $table->string('gio');
            $table->string('trangthai');
            $table->Integer('idtaikhoan');
            $table->string('code');
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
        Schema::dropIfExists('lichhen');
    }
}
