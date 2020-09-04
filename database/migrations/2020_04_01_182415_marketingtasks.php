<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Marketingtasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketingtasks', function (Blueprint $table) {
            $table -> increments("id");
            $table->Integer('head_id');
            $table->Integer('employee_id');
            $table->foreign('head_id')->references('id')->on('marketingheads');
            $table->foreign('employee_id')->references('id')->on('marketingemployees');
            $table->string('task_details');
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
        //
    }
}
