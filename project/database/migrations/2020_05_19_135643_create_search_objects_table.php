<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_objects', function (Blueprint $table) {
            $table->id("id_Search_Object")->autoIncrement();
            $table->integer("Room_count");
            $table->double("Price");
            $table->double("Size");
            $table->string("Year_Built");
            $table->string("Building_Number");
            $table->string("Building_Storeys");
            $table->string("Description");
            $table->string("Ad_upload_date");
            $table->string("Ad_end_date");
            $table->foreignId("fk_Userid_User")->references("id_User")->on("users");
            $table->enum("Installation", ['Unfinished building', "Foundation", "Installed", "Not Installed", "Partially decorated"]);
            $table->enum("Object_Type", ['House for sale', "House for rent", "Apartment for sale", "Apartment for rent", "Room for rent"]);
            $table->enum("Heating", ['Central', "Central collector", "Electricity", "Gas", "Aerothermal", "Solid fuel", "Liquid fuel", "Geothermal", "Other"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_objects');
    }
}
