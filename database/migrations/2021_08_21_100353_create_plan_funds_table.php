<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('plans')->onDelete('cascade');
            $table->string('plan_title');
            $table->string('type');
            $table->integer('amount');
            $table->string('resource');
            $table->foreignId('bank_id')->constrained('banks')->onDelete('cascade');
            $table->integer('employment')->default(1);
            $table->string('date');
            $table->string('plan_code');
            $table->text('summery');
            $table->integer('fund');
//            $table->
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
        Schema::dropIfExists('plan_funds');
    }
}
