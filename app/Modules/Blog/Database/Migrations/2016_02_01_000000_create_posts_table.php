<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_posts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('body');
			$table->text('extract')->nullable();
			$table->string('slug');
			$table->integer('user_id')->unsigned();
			$table->timestamp('published_at')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('blog_posts',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('core_users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('blog_posts');
	}
}
