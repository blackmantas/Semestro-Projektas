<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id("id_address")->autoIncrement();
            $table->string("Street_Name");
            $table->foreignId("fk_Townid_Town")->references('id_Town')->on('towns');
            $table->foreignId("fk_Search_Objectid_Search_Object")->unique()->references('id_Search_Object')->on('search_objects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
