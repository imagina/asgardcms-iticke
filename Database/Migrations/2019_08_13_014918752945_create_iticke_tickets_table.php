<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItickeTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iticke__tickets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject');
            $table->string('message');
            $table->string('attached')->nullable();
            $table->smallInteger('status')->default(0);
            $table->smallInteger('priority')->default(0);
            $table->smallInteger('type')->default(0);
            $table->string('full_name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('options')->nullable();
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
        Schema::dropIfExists('iticke__tickets');
    }
}
