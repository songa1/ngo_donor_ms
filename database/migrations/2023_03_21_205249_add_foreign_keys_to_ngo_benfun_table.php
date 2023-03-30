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
        Schema::table('ngo_benfun', function (Blueprint $table) {
            $table->foreign(['fund_id'], 'funds_ben')->references(['fund_id'])->on('ngo_funds');
            $table->foreign(['beneficiary_id'], 'ben_funds')->references(['beneficiary_id'])->on('ngo_beneficiaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ngo_benfun', function (Blueprint $table) {
            $table->dropForeign('funds_ben');
            $table->dropForeign('ben_funds');
        });
    }
};
