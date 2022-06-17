<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('meeting_number', 100)->nullable()->default('MOM');
            $table->bigInteger('created_id')->nullable();
            $table->bigInteger('parent_meeting_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('location')->nullable();
        
            $table->string('subject')->nullable();

            $table->string('out_att_name')->nullable();
            $table->string('out_att_email')->nullable();
            $table->integer('registered')->nullable();

            $table->string('type')->nullable();

            $table->longText('description')->nullable();
            $table->string('audio')->default('audion');
            $table->string('scanned')->default('scanned');
            $table->integer('meeting_allowed')->nullable()->default(1);
            $table->longText('updated_log')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')
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
        Schema::dropIfExists('meetings');
    }
}
