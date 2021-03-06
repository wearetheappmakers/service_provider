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
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->date('b_date')->nullable();
            $table->tinyInteger('gender')->comment('1=Male, 2=Female, 3=Other');
            $table->string('landline')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city_id')->nullable();
            $table->longText('country_id')->nullable();
            $table->string('password')->nullable();
            $table->string('spassword')->nullable();
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
