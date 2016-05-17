<?php

namespace Platonic\Blog\Database\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogDatabaseSeeder extends Seeder
{
	
	protected $toTruncate = [
		'blog_categories',
		'blog_tags',
		'blog_posts',
		'blog_category_post',
		'blog_comments',
		'blog_post_tag'
	];

	public function run()
	{
		Model::unguard();

		$this->truncate_tables();

		$this->call('Platonic\Blog\Database\Seeds\CategoriesTableSeeder');
		$this->call('Platonic\Blog\Database\Seeds\TagsTableSeeder');
		$this->call('Platonic\Blog\Database\Seeds\PostsTableSeeder');
		$this->call('Platonic\Blog\Database\Seeds\CategoryPostTableSeeder');
		$this->call('Platonic\Blog\Database\Seeds\CommentsTableSeeder');
		$this->call('Platonic\Blog\Database\Seeds\PostTagTableSeeder');

		Model::reguard();
	}

	protected function truncate_tables(){

		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		foreach($this->toTruncate as $table){
			DB::table($table)->truncate();
		}

		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
		
	}

}
