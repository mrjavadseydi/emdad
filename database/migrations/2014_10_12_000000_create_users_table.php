<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('fathername')->nullable();
            $table->string('birth')->nullable();
            $table->string('degree')->nullable();
            $table->enum('user_type',['مددجو','کارمند امداد','کارمند شرکت'])->nullable();
            $table->text('address')->nullable();
            $table->float('distance')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('national_id')->unique();
            $table->string('role')->default('user');
            $table->string('password');
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
