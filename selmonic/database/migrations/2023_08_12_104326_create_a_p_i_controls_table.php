<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('a_p_i_controls', function (Blueprint $table) {
            $table->id();
            $table->integer('relay1')->default(1);
            $table->integer('relay3')->default(1);
            $table->integer('relay4')->default(1);
            $table->timestamps();
        });

        // Insert default data
        DB::table('a_p_i_controls')->insert([
            'relay1' => 1,
            'relay3' => 1,
            'relay4' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_p_i_controls');
    }
};
