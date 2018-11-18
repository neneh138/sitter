<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitterCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitter_certificates', function (Blueprint $table) {
            $table->increments('sitter_certificates_id');
            $table->integer('certificate_id');
            $table->integer('sitter_id');
            $table->mediumText('other_sitter_certificate_id')->nullable();;

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
        Schema::dropIfExists('sitter_certificates');
    }
}
