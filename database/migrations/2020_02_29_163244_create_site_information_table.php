<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('address');
            $table->string('pnumber');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('surl');
            $table->string('ctext');
          
            $table->string('logo');
            $table->string('flogo');
    
           

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
        Schema::dropIfExists('site_information');
    }
}
