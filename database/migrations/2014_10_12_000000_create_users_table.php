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
            $table->increments('id');
            $table->string('name');
            $table->string('username', 50)->unique();
            $table->string('phone', 50)->unique();
            $table->string('password');
            $table->string('type', 20)->comment('用户类型 admin: 管理员');
            $table->tinyInteger('status')->default(0)->comment('状态 0:未启用, 1: 正常');
            $table->rememberToken();
            $table->timestamps();

            $table->unique(['phone', 'type']);
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
