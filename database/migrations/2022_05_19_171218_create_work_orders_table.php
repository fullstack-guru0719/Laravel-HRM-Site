<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number', 100)->nullable()->default('Order');
            $table->bigInteger('created_id')->nullable();
            $table->string('bill_to')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('work_order')->nullable();
            $table->string('ref')->nullable();
            $table->string('city')->nullable();
            $table->string('order_taken_by')->nullable();
            $table->string('email')->nullable();
            $table->date('start_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->date('end_date')->nullable();
            $table->string('work_type')->nullable();
            $table->string('tech_name')->nullable();
            $table->longText('description')->nullable();
            $table->longText('signature')->nullable();
            $table->integer('work_order_allowed')->nullable()->default(1);
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
        Schema::dropIfExists('work_orders');
    }
}
