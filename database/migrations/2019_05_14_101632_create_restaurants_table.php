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
            $table->bigIncrements('id');
            $table->string('store_name');
            $table->text('contact');
            $table->text('reservation_availability');
            $table->text('address');
            $table->text('access');
            $table->text('opening_hours');
            $table->text('regular_holiday');
            $table->text('budget');
            $table->text('budget_word_of_mouth');
            $table->text('payment');
            $table->text('image_url1');
            $table->text('image_url2');
            $table->text('image_url3');
            $table->text('image_url4');
            $table->text('image_url5');
            $table->text('image_url6');
            $table->text('image_url7');
            $table->text('image_url8');
            $table->text('image_url9');
            $table->text('image_url10');
            $table->text('comment_title');
            $table->text('comment_first');
            $table->text('tabelog');
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
        Schema::dropIfExists('restaurants');
    }
}
