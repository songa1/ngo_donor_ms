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
            $table->dateTime('created_at')->nullable();
            $table->integer('created_by')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
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
