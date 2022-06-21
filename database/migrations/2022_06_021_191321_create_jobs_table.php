<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_number')->nullable();
            $table->bigInteger('created_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('job_position')->nullable();
            $table->string('job_category')->nullable();
            $table->string('job_type')->nullable();
            $table->string('no_of_vacancy')->nullable();
            $table->string('experiences')->nullable();
            $table->string('posted_date')->nullable();
            $table->string('last_apply_date')->nullable();
            $table->string('close_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('salary_amount')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();   
            $table->string('country')->nullable();
            $table->string('education_level')->nullable();
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
            $table->string('job_allowed')->nullable();
            $table->longText('updated_log')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
