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
        Schema::create('ngo_benfun', function (Blueprint $table) {
            $table->integer('benfun_id', true);
            $table->integer('beneficiary_id')->nullable()->index('ben_funds');
            $table->integer('fund_id')->nullable()->index('funds_ben');
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
        Schema::dropIfExists('ngo_benfun');
    }
};