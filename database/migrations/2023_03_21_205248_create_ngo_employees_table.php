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
        Schema::create('ngo_employees', function (Blueprint $table) {
            $table->integer('employee_id', true);
            $table->string('employee_name', 100)->nullable();
            $table->string('employee_email', 100)->nullable();
            $table->string('employee_phone', 15)->nullable();
            $table->date('employee_dob')->nullable();
            $table->string('employee_password', 100)->nullable();
            $table->integer('ngo_id')->nullable()->index('ngo_id');
            $table->integer('role_id')->nullable()->index('role_id');
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
        Schema::dropIfExists('ngo_employees');
    }
};
