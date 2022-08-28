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
            $table->string('book_image')->default('zV8UuoQf9NPdFPk8R6Qf65CImqNbp5Rh2lLZnvou.png');
            $table->Integer('pages');
            $table->foreignId('category')->reference('id')->on('categories')->onDelete('cascade');
            $table->string('book_file')->default('EQposyojE3wZrxTt6ZmgXxXuOENKtDYjzLORI5SF.pdf');
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
