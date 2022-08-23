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
        Schema::create('saved_posts', function (Blueprint $table) {
           
            // $table->unsignedBigInteger('post_id')->nullable();
            $table->foreignId("post_id")->constraint('posts')->onDelete("cascade");
            // $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId("user_id")->constraint('users')->onDelete("cascade");
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saved_posts');
    }
};
