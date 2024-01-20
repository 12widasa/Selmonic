<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPIUpdateRealtimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_p_i_update_realtimes', function (Blueprint $table) {
            $table->id();
            $table->float('ph');
            $table->float('suhu_air');
            $table->float('tds');
            $table->float('tinggi_air');
            $table->string('keterangan', 255)->collation('utf8mb4_general_ci');
            $table->timestamp('timestamp')->nullable();
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
        Schema::dropIfExists('a_p_i_update_realtimes');
    }
};
