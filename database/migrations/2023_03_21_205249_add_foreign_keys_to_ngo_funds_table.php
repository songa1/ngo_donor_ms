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
        Schema::table('ngo_funds', function (Blueprint $table) {
            $table->foreign(['fund_type'], 'fund_type')->references(['funtype_id'])->on('ngo_funtype');
            $table->foreign(['fund_donor'], 'fund_donor')->references(['donor_id'])->on('ngo_donors');
            $table->foreign(['ngo_id'], 'ngo__id')->references(['ngo_id'])->on('ngo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ngo_funds', function (Blueprint $table) {
            $table->dropForeign('fund_type');
            $table->dropForeign('fund_donor');
            $table->dropForeign('ngo__id');
        });
    }
};
