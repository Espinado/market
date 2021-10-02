<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromDealerCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealer_companies', function (Blueprint $table) {
            $table->dropColumn('company_country');
            $table->dropColumn('company_reg_number');
            $table->dropColumn('company_city');
            $table->dropColumn('company_street');
            $table->dropColumn('company_post_code');
            $table->dropColumn('company_logo');
            $table->renameColumn('company_name', 'dealer_company_name');
            $table->renameColumn('company_status', 'dealer_company_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dealer_companies', function (Blueprint $table) {
            $table->string('company_country');
            $table->string('company_reg_number');
            $table->string('company_city');
            $table->string('company_street');
            $table->string('company_post_code');
            $table->string('company_logo')->nullable();
            $table->renameColumn('dealer_company_name', 'company_name');
            $table->renameColumn('dealer_company_status', 'company_status');
        });
    }
}
