<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special__needs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Autism');
            $table->string('Diabetes');
            $table->string('Asthma');
            $table->string('ADHD');
            $table->string('Epilepsy');
            $table->string('Down_s_syndrome');

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
        Schema::dropIfExists('special__needs');
    }
}
