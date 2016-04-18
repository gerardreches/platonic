<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPostPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_category_post', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->index();
            $table->integer('post_id')->unsigned()->index();
        });

        Schema::table('blog_category_post',function(Blueprint $table){
            $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('blog_posts')->onDelete('cascade');
            $table->primary(['category_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_category_post');
    }
}
