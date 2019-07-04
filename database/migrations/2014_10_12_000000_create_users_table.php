<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('nickname')->default('0');
            $table->string('email')->unique();
            $table->bigInteger('mobile');
            $table->enum('status', ['active', 'inactive', 'delete'])->default('active');
            $table->enum('user_type', ['admin', 'consumer'])->default('consumer');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('access_token')->unique()->nullable();
            $table->string('live_account')->unique()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
