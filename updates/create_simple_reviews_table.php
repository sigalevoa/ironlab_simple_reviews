<?php namespace IronLab\SimpleReviews\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSimpleReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('ironlab_simplereviews_simple_reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('text');
            $table->boolean('unread')->nullable();
            $table->boolean('publish')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ironlab_simplereviews_simple_reviews');
    }
}
