<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitters', function (Blueprint $table) {
            $table->increments('sitter_id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('phone_number')->nullable();

            $table->longText('description')->nullable();

            $table->string('image')->nullable();

            $table->integer('driver_license_id')->nullable();

            $table->integer('smoker_id')->nullable();




            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('sitters');
    }
}
