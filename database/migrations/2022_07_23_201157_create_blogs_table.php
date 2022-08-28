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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name');
            $table->date('date');
            $table->longtext('blog_details');
            $table->string('blog_image')->default('DsieOcAPBjhlfRQbjeuzoEFrV14PwrtSwBPv2WJ8.jpg');
            $table->string('blog_video_link')->default('https://www.youtube.com/watch?v=APi0egp9fok&list=RDAPi0egp9fok&start_radio=1');
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
        Schema::dropIfExists('blogs');
    }
};
