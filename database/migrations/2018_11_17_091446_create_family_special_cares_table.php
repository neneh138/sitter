<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilySpecialCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_special_cares', function (Blueprint $table) {
            $table->increments('family_special_cares_id');
            $table->integer('special_cares_id');
            $table->integer('parent_id')->nullable();;
            $table->mediumText('other_family_special_cares')->nullable();;

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
        Schema::dropIfExists('family_special_cares');
    }
}
