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
        Schema::table('ngo_beneficiaries', function (Blueprint $table) {
            $table->foreign(['ngo_id'], 'ngoid')->references(['ngo_id'])->on('ngo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ngo_beneficiaries', function (Blueprint $table) {
            $table->dropForeign('ngoid');
        });
    }
};
