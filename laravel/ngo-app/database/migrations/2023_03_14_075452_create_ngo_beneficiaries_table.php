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
        Schema::create('ngo_beneficiaries', function (Blueprint $table) {
            $table->integer('beneficiary_id', true);
            $table->string('beneficiary_name', 200)->nullable();
            $table->date('beneficiary_dob')->nullable();
            $table->string('beneficiary_occupation', 200)->nullable();
            $table->string('beneficiary_phone', 20)->nullable();
            $table->string('beneficiary_email', 30)->nullable();
            $table->integer('ngo_id')->nullable()->index('ngoid');
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
        Schema::dropIfExists('ngo_beneficiaries');
    }
};
