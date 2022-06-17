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
            $table->bigInteger('user_id');
            $table->string('phone_number')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('marital_status')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('email')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanet_address')->nullable();
            $table->string('photo')->nullable();
            $table->string('em_email')->nullable();
            $table->string('em_password')->nullable();
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
