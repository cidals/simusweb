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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('risk_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('risk_id')->references('id')->on('risks');
            $table->date('date_input');
            $table->string('name', 100);
            $table->text('address');
            $table->string('no_nib', 13);
            $table->string('kbli_code', 5);
            $table->string('kbli_name', 200);
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
        Schema::dropIfExists('datas');
    }
};
