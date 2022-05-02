<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eexiprofile extends Model
{
    use HasFactory;

    protected $fillable = ['ship_name', 'imo_number', 'ship_type', 'company_name', 'contact_fname', 'contact_lname', 'contact_email', 'ship_particulars', 'cert_registry', 'eiapp_cert', 'capacity_plan', 'sea_trial_report', 'ship_safety_cert', 'nox_tech_file', 'electric_power_table', 'iapp_cert', 'iapp_record', 'machinery_particulars', 'cert_classification', 'approved_cargo', 'speedpower_curve'];
}
