<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmphotoFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emphoto_files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('f_name')->nullable();
            $table->string('f_path')->nullable();
            $table->integer('emphoto_allowed')->nullable();
            $table->longText('updated_log')->nullable();
            
            $table->foreignId('employee_id')
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
        Schema::dropIfExists('emphoto_files');
    }
}
