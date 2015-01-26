<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConsultationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consultation', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('emp_id');
            $table->integer('reg_id');
            $table->string('complain');
            $table->string('observation');
            $table->string('comment');
            $table->string('lab');
            $table->string('process');
            $table->dateTime('signoff');
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
		Schema::drop('consultation');
	}

}
