<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEexiprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eexiprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('ship_name');
            $table->string('imo_number');
            $table->string('ship_type');
            $table->string('company_name');
            $table->string('contact_fname');
            $table->string('contact_lname');
            $table->string('contact_email');
            $table->string('ship_particulars', 255);
            $table->string('cert_registry', 255);
            $table->string('eiapp_cert', 255);
            $table->string('capacity_plan', 255);
            $table->string('sea_trial_report', 255);
            $table->string('ship_safety_cert', 255);
            $table->string('nox_tech_file', 255);
            $table->string('electric_power_table', 255)->nullable();
            $table->string('iapp_cert', 255);
            $table->string('iapp_record', 255);
            $table->string('machinery_particulars', 255);
            $table->string('cert_classification', 255);
            $table->string('approved_cargo', 255);
            $table->string('speedpower_curve', 255);
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
        Schema::dropIfExists('eexiprofiles');
    }
}
