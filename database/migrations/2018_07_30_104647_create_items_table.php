<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * item migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('discription');
            $table->integer('year')->nullable();
            $table->string('origin')->nullable();
            $table->string('name_artist')->nullable();
            $table->integer('users_id')->unsigned(); 
            $table->foreign('users_id')->references('id')->on('users');        
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            
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
        Schema::dropIfExists('items');
    }
}
