<?php

use Illuminate\Database\Migrations\Migration;

class CreateKorisnici extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('korisnici', function($t) {
                $t->increments('id');
                $t->string('username', 32);
                $t->string('password', 64);
                $t->string('name', 64);
                $t->string('surname', 64);
 				$t->boolean('active');
                $t->string('activation_key', 64);
                $t->timestamps();
        });
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('korisnici');
	}

}

