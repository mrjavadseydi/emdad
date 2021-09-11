<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_employments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('plans')->onDelete('cascade');
            $table->boolean('has_facility')->default(false);
            $table->string('job_title')->nullable();
            $table->integer('amount')->nullable();
            $table->string('date')->default();
            $table->boolean('status')->default(false);
            $table->string('facility_type');
            $table->text('reason_payment')->nullable();
            $table->text('other_services')->nullable();
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
        Schema::dropIfExists('pla_employments');
    }
}
