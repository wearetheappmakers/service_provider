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
            $table->increments('id');
            $table->string('is_active')->default(0);
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->date('b_date');
            $table->tinyInteger('gender')->comment('1=Male, 2=Female, 3=Other');
            $table->string('landline');
            $table->string('state_id');
            $table->string('city_id');
            $table->longText('country_id');
            $table->string('password');
            $table->string('spassword');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes()->nullable();
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
