<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSermonTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermon_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('sermon_id');
            $table->foreign('sermon_id')
                ->references('id')
                ->on('sermons')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sermon_tag');
    }
}
