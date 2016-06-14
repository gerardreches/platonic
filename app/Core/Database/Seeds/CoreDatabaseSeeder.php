<?php
namespace Platonic\Core\Database\Seeds;

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

		$this->call('Platonic\Core\Database\Seeds\UsersTableSeeder');
		$this->call('Platonic\Core\Database\Seeds\RolesTableSeeder');
		$this->call('Platonic\Core\Database\Seeds\RoleUserTableSeeder');
		$this->call('Platonic\Core\Database\Seeds\PermissionsTableSeeder');
		$this->call('Platonic\Core\Database\Seeds\PermissionRoleTableSeeder');
		$this->call('Platonic\Core\Database\Seeds\OptionGroupsTableSeeder');
		$this->call('Platonic\Core\Database\Seeds\OptionsTableSeeder');

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
