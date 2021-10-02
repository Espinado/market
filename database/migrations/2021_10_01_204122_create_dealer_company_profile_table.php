<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealerCompanyProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer_company_profile', function (Blueprint $table) {
            $table->id();
            $table->string('dealer_company_reg_number');
            $table->string('dealer_company_vat_number')->nullable();
            $table->string('dealer_company_legal_country');
            $table->string('dealer_company_legal_city');
            $table->string('dealer_company_legal_street');
            $table->string('dealer_company_legal_house');
            $table->string('dealer_company_legal_room');
            $table->string('dealer_company_legal_post_code');
            $table->string('dealer_company_phys_country');
            $table->string('dealer_company_phys_city');
            $table->string('dealer_company_phys_street');
            $table->string('dealer_company_phys_house');
            $table->string('dealer_company_phys_room');
            $table->string('dealer_company_phys_post_code');
            $table->string('dealer_company_admin_person');
            $table->string('company_logo')->nullable();
            $table->bigInteger('dealer_company')->unsigned();
            $table->foreign('dealer_company')->references('id')->on('dealer_companies')->onDelete('cascade');
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
        Schema::dropIfExists('dealer_company_profile');
    }
}
