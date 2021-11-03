<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('image')->nullable();
            $table->text('route')->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });


        DB::table('section')->insert([
          [
           'name' => 'Booking Status',
           'image' => 'fa fa-eye',
           'route' => 'admin.bookingstatus.index',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
         [
           'name' => 'Category',
           'image' => 'fa fa-layer-group',
           'route' => 'admin.category.index',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
        [
           'name' => 'Commision',
           'image' => 'admin.commision.index',
           'route' => 'fa fa-money-bill-wave',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
        [
           'name' => 'Customer',
           'image' => 'fas fa-users',
           'route' => 'admin.vendors.index',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
        [
           'name' => 'Provider',
           'image' => 'fas fa-user',
           'route' => 'admin.provider.index',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
        [
           'name' => 'Service',
           'image' => 'fa fa-atom',
           'route' => 'admin.service.index',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
        [
           'name' => 'Review',
           'image' => 'fa fa-atom',
           'route' => 'admin.review.index',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
        [
           'name' => 'Bookings',
           'image' => 'fa fa-atom',
           'route' => 'admin.bookings.index',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
       ],
        
    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section');
    }
}

