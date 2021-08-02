<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->string('type') ;
            $table->string('position') ;
            $table->string('title') ;
            $table->integer('content_id');
            $table->string('slug');
            $table->string('description');
            $table->string('url');
            $table->string('file');
            $table->integer('order');
            $table->string('status');
            $table->integer('is_delete_able');
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
        Schema::dropIfExists('menus');
    }
}
