<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('core_options', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique()->index();
			$table->string('value')->nullable();
			$table->string('label');
			$table->string('description')->nullable();
			$table->integer('group_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('core_options',function(Blueprint $table){
            $table->foreign('group_id')->references('id')->on('core_option_groups')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('core_options');
	}
}
