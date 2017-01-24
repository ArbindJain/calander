<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalandersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calanders', function($table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('day');
            $table->string('title');
            $table->string('location');
            $table->string('notes');
            $table->timestamps();
            // We'll need to ensure that MySQL uses the InnoDB engine to
            // support the indexes, other engines aren't affected.
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calanders');
    }
}
