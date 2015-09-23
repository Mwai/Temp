<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('profiles', function(Blueprint $table)
            {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');
                $table->string('category');
                $table->text('description');
                $table->integer('phone');
                $table->text('secondary_category');
                $table->text('secondary_desc');
                $table->string('location');
                $table->integer('capacity');
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
        Schema::drop('profiles');
    }
}
