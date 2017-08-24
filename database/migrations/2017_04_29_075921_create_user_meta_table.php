<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usermeta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->string("firstname", 100)->nullable();
            $table->string("lastname", 100)->nullable();
            $table->string("profilepicture", 100)->nullable();
            $table->text("aboutme")->nullable();
            $table->string("phonenumber", 100)->nullable();
            $table->string("address", 100)->nullable();
            $table->string("city", 50)->nullable();
            $table->string("state", 50)->nullable();
            $table->string("zip", 50)->nullable();
            $table->string("weburl", 100)->nullable();
            $table->string("facebookurl", 100)->nullable();
            $table->string("twitterurl", 100)->nullable();
            $table->string("googleurl", 100)->nullable();
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
        Schema::dropIfExists('usermeta');
    }
}
