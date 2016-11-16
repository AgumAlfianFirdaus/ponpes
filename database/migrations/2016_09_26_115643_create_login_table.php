<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('email',50);
            $table->string('username',50);
            $table->string('password',100);
	$table->string('hak_akses',50);
	$table->string('remember_token',200);
	$table->timestamps();
	$table->string('pic',100);
			
			
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
