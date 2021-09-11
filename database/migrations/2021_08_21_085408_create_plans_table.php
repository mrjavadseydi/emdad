<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('executor_id')->constrained('users')->onDelete('cascade');
            $table->string('group');
            $table->string('title');
            $table->string('type');
            $table->string('source');
            $table->string('bank');
            $table->string('date');
            $table->string('code');
            $table->string('space');
            $table->integer('employment');

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
        Schema::dropIfExists('plans');
    }
}
