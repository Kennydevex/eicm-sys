<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folks', function (Blueprint $table) {
          $table->increments('id');
          $table->string('first_name', 50);
          $table->string('last_name', 50);
          $table->string('identification_card', 15);//Identificatio Card: Bilhete de Identidade
          $table->enum('gender', ['M', 'F', 'Other'])->default('Other');
          $table->string('email', 60)->unique();
          $table->string('phone_number', 20);
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
        Schema::dropIfExists('folks');
    }
}
