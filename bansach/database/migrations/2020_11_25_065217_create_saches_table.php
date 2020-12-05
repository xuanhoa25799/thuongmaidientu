<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TenSach');
            $table->integer('MaTheLoai');
            $table->string('MoTa');
            $table->string('Gia');
            $table->integer('So_Luong');
            $table->year('Nam_XB');
            $table->dateTime('Ngay_Nhap');
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
        Schema::dropIfExists('saches');
    }
}
