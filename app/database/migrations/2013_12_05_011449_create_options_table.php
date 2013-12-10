<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('options', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->string('title');
			$table->text('description');
			$table->boolean('correct');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @m_returnstatus(conn, identifier) void
	 */
	public function down()
	{
		Schema::drop('options');
	}

}
