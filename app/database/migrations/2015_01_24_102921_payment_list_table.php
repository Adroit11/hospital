<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paymentlist', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('pay_id');
            $table->integer('emp_id');
            $table->integer('reg_id');
            $table->integer('item_id');
            $table->integer('con_id');
            $table->string('checkin_type');
            $table->string('patient_direction');
            $table->string('quantity');
            $table->string('bill_type');
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
		Schema::drop('paymentlist');
	}

}
