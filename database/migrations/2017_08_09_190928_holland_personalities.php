<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HollandPersonalities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holland_personalities', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('email');
            $table->string('personality1')->nullable();
            $table->string('personality2')->nullable();
            $table->string('personality3')->nullable();
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
        Schema::dropIfExists('holland_personalities');
    }
}
