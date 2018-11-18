<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitterLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitter_languages', function (Blueprint $table) {
            $table->increments('sitter_languages_id');
            $table->integer('language_id');
            $table->integer('sitter_id');
            $table->mediumText('other_sitter_languages')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sitter_languages');
    }
}
