<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_users', function (Blueprint $table) {
            $table->id();
            $table->string('job_user_number')->nullable();

            $table->foreignId('job_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->bigInteger('created_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->longText('description')->nullable();
            $table->Integer('status')->nullable();
            $table->string('job_user_allowed')->nullable();
            $table->longText('resume_path')->nullable();
            $table->string('resume_name')->nullable();
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
        Schema::dropIfExists('job_users');
    }
}
