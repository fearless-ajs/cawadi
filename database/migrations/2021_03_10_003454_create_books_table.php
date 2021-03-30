<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->text('slug');
            $table->string('category');
            $table->string('price');
            $table->text('abstract');
            $table->integer('sold_out')->nullable()->default(0);
            $table->text('description');
            $table->integer('stock')->nullable();
            $table->string('code', 1000);
            $table->string('front_cover');
            $table->string('back_cover');
            $table->string('side_cover')->nullable();
            $table->foreignId('publisher_id')->constrained('publisher_details');
            $table->string('author');
            $table->boolean('audio_status')->default(false);
            $table->integer('audio_version_id')->nullable();
            $table->foreignId('approved_id')->nullable()->constrained('users');
            $table->timestamp('approved_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('books');
    }
}
