<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChennalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('num')->default(0)->comment('频道数量');
            $table->string('name')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->enum('type', ['live_broadcast', 'record'])->default('live_broadcast')->comment('直播 录播');
            $table->string('icon')->default('0')->comment('频道图标');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel');
    }
}
