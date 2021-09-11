<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanAidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_aids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('plans')->onDelete('cascade');
            $table->boolean('employment')->default(false);
            $table->string('job_title')->nullable();
            $table->unsignedSmallInteger('job_activity')->nullable();
            $table->boolean('have_place')->default(false);
            $table->boolean('home_employment')->default(false);
            $table->unsignedSmallInteger('area')->nullable();
            $table->text('other_places')->nullable();
            $table->text('other_problems')->nullable();
            $table->boolean('force_insurance')->default(false);
            $table->string('insurance_code')->nullable();
            $table->string('insurance_expire')->nullable();
            $table->string('insurance_relation')->nullable();
            $table->string('covering_status')->nullable();
            $table->string('employer')->nullable();
            $table->string('tracking_number')->nullable();
            $table->boolean('merit')->default(false);
            $table->string('sign_date')->nullable();
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
        Schema::dropIfExists('plan_aids');
    }
}
