<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemorandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoranda', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->unsignedBigInteger('id_user');
            $table->string('to');
            $table->string('from');
            $table->string('time');
            $table->string('title');
            $table->string('subject');
            $table->text('description');
            $table->string('file')->nullable();
            $table->enum('approve', ['yes', 'no'])->default('no');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memoranda');
    }
}
