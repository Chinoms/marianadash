<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileCodeToEexiprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eexiprofiles', function (Blueprint $table) {
            $table->string('eexiprofiles_code')->after('ship_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eexiprofiles', function (Blueprint $table) {
            $table->dropColumn('eexiprofiles_code');
        });
    }
}
