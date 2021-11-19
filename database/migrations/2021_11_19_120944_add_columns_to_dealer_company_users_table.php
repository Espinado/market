<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToDealerCompanyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealer_company_users', function (Blueprint $table) {
            $table->boolean('is_active')->default(true)->after('dealer_company_id');
            $table->boolean('is_banned')->default(false)->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dealer_company_users', function (Blueprint $table) {
            $table->dropColumn('is_active');
            $table->dropColumn('is_banned');
        });
    }
}
