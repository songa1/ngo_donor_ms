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
        Schema::create('ngo_donors', function (Blueprint $table) {
            $table->integer('donor_id', true);
            $table->string('donor_name', 30)->nullable();
            $table->string('donor_email', 50)->nullable();
            $table->string('donor_phone', 20)->nullable();
            $table->integer('ngo_id')->nullable()->index('ngo');
            $table->dateTime('created_at')->nullable();
            $table->integer('created_by')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ngo_donors');
    }
};
