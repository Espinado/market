<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameForeignDealerCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealer_company_profiles', function(Blueprint $table) {
            $table->renameColumn('dealer_company', 'dealer_company_id');
            $table->foreign('dealer_company_id')
                ->references('id')
                ->on('dealer_companies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dealer_company_profiles', function(Blueprint $table) {
            $table->dropForeign(['dealer_company_id']);
            $table->renameColumn('dealer_company_id', 'dealer_company');
            $table->foreign('dealer_company')
            	->references('id')
            	->on('dealer_companies')
            	->onDelete('cascade');
        });
    }
}
