<?php
namespace Platonic\Modules\Blog\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BlogDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('Platonic\Modules\Blog\Database\Seeds\FoobarTableSeeder');
	}

}
