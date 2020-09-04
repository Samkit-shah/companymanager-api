<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Marketingemployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('marketingemployees', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name',100);
            $table->String('contact');
            $table->string('address');
            $table->string('qualification');
            $table->string('password');
            $table->string('salary');
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
