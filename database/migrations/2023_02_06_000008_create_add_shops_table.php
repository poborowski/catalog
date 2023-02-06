<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddShopsTable extends Migration
{
    public function up()
    {
        Schema::create('add_shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('sd')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
