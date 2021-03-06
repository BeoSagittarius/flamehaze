<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_media', function (Blueprint $table) {
            $table->increments('entity_id');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('member_id')->nullable();
            $table->unsignedInteger('album_id')->nullable();
            $table->string('media_code', 12);
            $table->string('url', 255);
            $table->string('title', 255);
            $table->string('description', 255)->nullable();
            $table->enum('is_actived', ['Enable', 'Disable'])->default('Enable')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->integer('upuser')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_media');
    }
}
