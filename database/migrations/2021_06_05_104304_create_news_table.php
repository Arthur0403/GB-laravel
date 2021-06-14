<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('category_id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
                ->constrained()
                ->nullable();
            $table->foreignId('resource_id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
//                ->constrained()
                ->nullable()->default(NULL);
            $table->string('news_title', 255);
            $table->text('news_description');
            $table->string('author', 190)->nullable();
            $table->string('news_image', 255)->nullable();
            $table->string('status')->default('draft');
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
        Schema::dropIfExists('news');
    }
}
