<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionRolePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned()->index();
            $table->integer('role_id')->unsigned()->index();
        });

        Schema::table('core_permission_role',function(Blueprint $table){
            $table->foreign('permission_id')->references('id')->on('core_permissions')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('core_roles')->onDelete('cascade');
            $table->primary(['permission_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_permission_role');
    }
}
