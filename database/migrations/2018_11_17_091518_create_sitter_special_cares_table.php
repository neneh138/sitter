<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitterSpecialCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitter_special_cares', function (Blueprint $table) {

            $table->increments('sitter_special_cares_id');
            $table->integer('special_cares_id');
            $table->integer('sitter_id')->nullable();;
            $table->mediumText('other_sitter_special_cares')->nullable();;
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
        Schema::dropIfExists('sitter_special_cares');
    }
}
