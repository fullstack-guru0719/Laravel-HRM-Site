<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('f_name')->nullable();
            $table->string('f_path')->nullable();
            $table->integer('meeting_file_allowed')->nullable()->default(1);
            $table->longText('updated_log')->nullable();

            $table->foreignId('meeting_id')
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
        Schema::dropIfExists('meeting_files');
    }
}
