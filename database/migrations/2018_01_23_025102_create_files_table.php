<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->comment('ファイル種別');
            $table->string('extension')->comment('拡張子');
            $table->string('name')->comment('ファイル名');
            $table->string('title')->nullable()->comment('タイトル');
            $table->string('alt')->nullable()->comment('説明');
            $table->integer('width')->nullable()->comment('横幅');
            $table->integer('height')->nullable()->comment('高さ');
            $table->integer('size')->nullable()->comment('バイト単位のサイズ');
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
        Schema::dropIfExists('files');
    }
}
