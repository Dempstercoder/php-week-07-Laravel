<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->string('address_1', 300); // the address 1 of the owner
            $table->string('address_2', 300)->nullable(); // the address 2 of the owner
            //nullable: no value (so it's okay if the owner does not put anything in address 2)
            $table->string('town',50); //the town of the owner
            $table->string('postcode', 50);; //the postcode of the owner
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
            $table->dropColumn('town');
            $table->dropColumn('postcode');
        });
    }
}
