<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmCompaniesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('em_companies', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->nullable();
            $table->string('join_date')->nullable();
            $table->string('resignation_date')->nullable();
            $table->string('termination_date')->nullable();
            $table->string('credit_leaves')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('salary_status')->nullable();
            $table->timestamps();
            $table->integer('em_company_allowed')->nullable();
            $table->longText('updated_log')->nullable();

            $table->foreignId('employee_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('department_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('em_companies');
    }
}
