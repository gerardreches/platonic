<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_comments', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('body');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->timestamps();
		});

		Schema::table('blog_comments',function(Blueprint $table){
            $table->foreign('post_id')->references('id')->on('blog_posts')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('core_users');
			$table->foreign('parent_id')->references('id')->on('blog_comments')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('blog_comments');
	}
}
