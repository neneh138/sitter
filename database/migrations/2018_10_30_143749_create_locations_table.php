<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Prague 1');
            $table->string('Prague 2');
            $table->string('Prague 3');
            $table->string('Prague 4');
            $table->string('Prague 5');
            $table->string('Prague 6');
            $table->string('Prague 7');
            $table->string('Prague 8');
            $table->string('Prague 9');
            $table->string('Prague 10');
         
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
        Schema::dropIfExists('locations');
    }
}
