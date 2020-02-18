<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id', 'role_ids_fk_360598')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id', 'permission_id_fk_360589')
            ->references('id')
            ->on('permissions')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}
