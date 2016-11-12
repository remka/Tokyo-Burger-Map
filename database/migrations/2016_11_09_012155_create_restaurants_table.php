<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name_en');
            $table->string('name_ja');
            $table->string('name_slug');

            $table->decimal('latitude', 9, 6);
            $table->decimal('longitude', 9, 6);

            $table->text('address_1');
            $table->text('address_2');
            $table->text('address_3');
            $table->text('municipality');
            $table->text('prefecture');
            $table->text('postcode');
            $table->char('country', 2);

            $table->boolean('has_nonsmoking')->default(false);
            $table->boolean('has_vegetarian')->default(false);

            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restaurants');
    }
}
