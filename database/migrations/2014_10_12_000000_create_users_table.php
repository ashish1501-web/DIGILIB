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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->string('email')->unique();
            $table->string('phoneNumber')->unique();
            
            $table->string('password');

            $table->enum('role',['1','2'])->comment('1:User 2:Admin')->default('1');
            // $table->subscription('role',['1','2'])->comment('1:User 2:Admin')->default('1');
           $table->enum('status',['active','inactive'])->default('active');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
