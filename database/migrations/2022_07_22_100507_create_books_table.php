<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('book_name');
            $table->string('author_name');
           
            $table->string('publisher');
            $table->longtext('description');
            $table->string('book_image')->default('1Z90mLn1nsDjFs5BIs38fvkRtWqdP7fwVhf0qt7y.png');
            $table->Integer('pages');
            $table->foreignId('category')->reference('id')->on('categories')->onDelete('cascade');
            $table->string('book_file')->default('1Z90mLn1nsDjFs5BIs38fvkRtWqdP7fwVhf0qt7y.png');
            $table->enum('statuscheck',['active','inactive'])->default('active');

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
};
