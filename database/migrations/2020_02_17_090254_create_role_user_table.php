<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_360598')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id', 'role_id_fk_360598')
            ->references('id')
            ->on('roles')
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
        Schema::dropIfExists('role_user');
    }
}
