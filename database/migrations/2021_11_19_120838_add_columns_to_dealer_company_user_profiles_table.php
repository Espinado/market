<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToDealerCompanyUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealer_company_user_profiles', function (Blueprint $table) {
            $table->string('photo')->after('email')->nullable();
            $table->string('contract')->after('photo')->nullable();
            $table->dateTime('birthday')->after('contract')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dealer_company_user_profiles', function (Blueprint $table) {
            $table->dropColumn('photo');
            $table->dropColumn('contract');
            $table->dropColumn('birthday');
        });
    }
}
