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
        Schema::table('ngo_employees', function (Blueprint $table) {
            $table->foreign(['role_id'], 'role_id')->references(['role_id'])->on('ngo_roles');
            $table->foreign(['ngo_id'], 'ngo_id')->references(['ngo_id'])->on('ngo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ngo_employees', function (Blueprint $table) {
            $table->dropForeign('role_id');
            $table->dropForeign('ngo_id');
        });
    }
};
