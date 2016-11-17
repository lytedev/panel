<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUrlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('links', function($table) {
			$table->boolean('main')->nullable();
		});

		DB::table('links')->where('url', '=', 'Link')->update(['main' => true]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{	
		Schema::table('links', function($table) {
			$table->dropColumn('main');
		});
	}

}
