<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealerCompanyUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer_company_user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('login')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->bigInteger('dealer_company_user_id')->unsigned();
            $table->foreign('dealer_company_user_id')->references('id')->on('dealer_company_users')->onDelete('cascade');
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
        Schema::dropIfExists('dealer_company_user_profiles');
    }
}
