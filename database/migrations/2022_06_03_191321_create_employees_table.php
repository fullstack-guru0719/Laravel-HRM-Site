<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('created_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('email')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanet_address')->nullable();
            $table->longText('photo')->nullable();
            $table->string('em_email')->nullable();
            $table->string('em_password')->nullable();
            $table->string('em_number')->nullable();
            $table->foreignId('department_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('designation')->nullable();
            $table->string('join_date')->nullable();
            $table->string('resignation_date')->nullable();
            $table->string('termination_date')->nullable();
            $table->string('credit_leaves')->nullable();
            $table->integer('salary_type')->nullable();
            $table->string('salary_amount')->nullable();
            $table->string('status')->nullable();
            $table->string('em_allowed')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
