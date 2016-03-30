<?php
namespace Platonic\Modules\Core\Database\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoreDatabaseSeeder extends Seeder
{
	
	protected $toTruncate = [
		'core_users',
		'core_options'
	];

	public function run()
	{
		Model::unguard();

		$this->truncate_tables();

		$this->call('Platonic\Modules\Core\Database\Seeds\UsersTableSeeder');
	}

	protected function truncate_tables(){

		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		foreach($this->toTruncate as $table){
			DB::table($table)->truncate();
		}

		DB::statement('SET FOREIGN_KEY_CHECKS = 1');

	}

}
