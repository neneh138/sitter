<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('English');
            $table->string('Deutsch');
            $table->string('Español');
            $table->string('Catalán');
            $table->string('Français');
            $table->string('Italiano');
            $table->string('Pусский');
            $table->string('Česky');
            $table->string('Slovensky');
            $table->string('Other');

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
        Schema::dropIfExists('languages');
    }
}
