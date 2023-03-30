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
        Schema::create('ngo_funds', function (Blueprint $table) {
            $table->integer('fund_id', true);
            $table->integer('fund_donor')->nullable()->index('fund_donor');
            $table->integer('fund_amount')->nullable();
            $table->integer('ngo_id')->nullable()->index('ngo__id');
            $table->timestamps();
            $table->integer('fund_type')->nullable()->index('fund_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ngo_funds');
    }
};
