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
        Schema::create('pakettransaksi2', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('barang')->nullable();
            $table->string('paket')->nullable();
            $table->string('berat')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('name_status')->nullable();
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
        Schema::dropIfExists('pakettransaksi2');
    }
};
