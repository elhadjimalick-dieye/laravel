<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            //id service
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
            ->references('id')
            ->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade');   
            //id roles
            $table->unsignedBigInteger('roles');
          
            $table->string('name');
            $table->string('prenom');
            $table->string('email');
            $table->string('statut');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
