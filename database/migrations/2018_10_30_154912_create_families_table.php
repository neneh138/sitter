<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->increments('parrent_id');
            $table->string('name');
            $table->string('surname');
            $table->string('phone_number');
            $table->string('emergency_contact_fullname');
            $table->string('emergency_contact_phonenumber');
            $table->mediumText('description');
            $table->mediumText('review');
            $table->longText('message_me');
            $table->string('image');
            $table->string('image_documents');

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
        Schema::dropIfExists('families');
    }
}
