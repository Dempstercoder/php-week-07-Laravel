<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            // create the basic comments columns
            $table->string('first_name', 100); // the first name of the owner
            $table->string('last_name', 100); // the last name of the owner
            $table->string('telephone',11); //the phone number of the owner
            $table->string('email', 100);; //the email address of the owner
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
        Schema::dropIfExists('owners');
    }
}
