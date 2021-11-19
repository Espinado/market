<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealerCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_status');
            $table->string('company_country');
            $table->string('company_reg_number');
            $table->string('company_city');
            $table->string('company_street');
            $table->string('company_post_code');
            $table->string('company_logo')->nullable();
            $table->boolean('tax_payer')->default(true);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_banned')->default(false);
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('dealer_companies');
    }
}
