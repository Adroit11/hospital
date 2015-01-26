<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistrationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registration', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->date('dob');
            $table->string('gender','10');
            $table->string('region');
            $table->string('district');
            $table->string('ward');
            $table->integer('sponser_id');
            $table->string('member_no');
            $table->string('tel','25');
            $table->string('email','50');
            $table->string('occupation','100');
            $table->string('emerg_tel','50');
            $table->string('emerg_name','50');
            $table->integer('emp_id');

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
		Schema::drop('registration');
	}

}
