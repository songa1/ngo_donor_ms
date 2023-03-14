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
        Schema::create('ngo_roles', function (Blueprint $table) {
            $table->integer('role_id', true);
            $table->string('role_name', 20)->nullable();
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
        Schema::dropIfExists('ngo_roles');
    }
};
