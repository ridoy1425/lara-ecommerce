<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128);
            $table->string('email',128)->unique();
            $table->string('phone_number',32)->unique();
            $table->string('password',128);
            $table->bigInteger('reward_points')->default(0);
            $table->date('email_varified_at')->nullable();
            $table->string('email_varification_token',88)->nullble();
            $table->string('facebook_id',32)->nullable();
            $table->string('google_id',32)->nullable();
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
        Schema::dropIfExists('user');
    }
}
