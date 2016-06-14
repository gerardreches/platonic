<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_role_user', function (Blueprint $table) {
            $table->integer('role_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
        });

        Schema::table('core_role_user',function(Blueprint $table){
            $table->foreign('role_id')->references('id')->on('core_roles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('core_users')->onDelete('cascade');
            $table->primary(['role_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_role_user');
    }
}
