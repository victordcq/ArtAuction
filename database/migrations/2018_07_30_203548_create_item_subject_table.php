<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSubjectTable extends Migration
{
    /**
     * item_subj migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_subject', function (Blueprint $table) {
           
            $table->integer('subject_id')->unsigned()->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

            $table->integer('item_id')->unsigned()->nullable();
            $table->foreign('item_id')->references('id')
            ->on('items')->onDelete('cascade');

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
        Schema::dropIfExists('item_subject');
    }
}
