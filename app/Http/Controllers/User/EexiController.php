<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Eexiprofile;
use Illuminate\Http\Request;
use App\Models\OtherFile;

class EexiController extends Controller
{
    public function createProfile()
    {
        return view('user.create-profile');
    }

    public function createProfileStepTwo()
    {
        return view('user.create-profile-step-two');
    }

    public function saveProfile(Request $request)
    {
        $eexi_profile = new Eexiprofile();
        $eexi_profile->ship_name = $request->ship_name;
        $eexi_profile->imo_number = $request->imo_number;
        $eexi_profile->ship_type = $request->ship_type;
        $eexi_profile->company_name = $request->company_name;
        $eexi_profile->contact_fname = $request->contact_fname;
        $eexi_profile->contact_lname = $request->contact_lname;
        $eexi_profile->contact_email = $request->contact_email;
        //files to be uploaded


        $request->validate([
            'ship_name' => 'required',
            'imo_number' => 'required',
            'ship_type' => 'required',
            'company_name' => 'required',
            'contact_fname' => 'required',
            'contact_lname' => 'required',
            'contact_email' => 'required | email',

        ]);


        $eexi_profile->save();
        //     'ship_name' => $request->ship_name,
        //     'imo_number' => $request->imo_number,
        //     'ship_type' => $request->ship_type,
        //     'company_name' => $request->company_name,
        //     'contact_fname' => $request->contact_fname,
        //     'contact_lname' => $request->contact_lname,
        //     'contact_email' => $request->contact_email,
        // ]);
        //dd($eexi_profile->id);
        $data['id'] = $eexi_profile->id;
        $data['message'] = 'Great! You\'ve finished the first step. Let\'s upload the files now.';
        return redirect('create-profile-step-two')->with($data);
    }

    public function saveProfileStepTwo(Request $request)
    {
        //dd($request->row_id);
        $eexi_profile = new Eexiprofile();
        $eexi_profile->ship_particulars = $request->ship_particulars;
        $eexi_profile->cert_registry = $request->cert_registry;
        $eexi_profile->eiapp_cert = $request->eiapp_cert;
        $eexi_profile->capacity_plan = $request->capacity_plan;
        $eexi_profile->sea_trial_report = $request->sea_trial_report;
        $eexi_profile->ship_safety_cert = $request->ship_safety_cert;
        $eexi_profile->nox_tech_file = $request->nox_tech_file;
        $eexi_profile->electric_power_table = $request->electric_power_table;
        $eexi_profile->iapp_cert = $request->iapp_cert;
        $eexi_profile->iapp_record = $request->iapp_record;
        $eexi_profile->eiapp_cert = $request->eiapp_cert;
        $eexi_profile->machinery_particulars = $request->machinery_particulars;
        $eexi_profile->cert_classification = $request->cert_classification;
        $eexi_profile->approved_cargo = $request->approved_cargo;
        $eexi_profile->speedpower_curve = $request->speedpower_curve;

        $request->validate([
            //uploads start here
            'ship_particulars' => 'required|mimes:pdf',
            'cert_registry' => 'required|mimes:pdf,doc,docx',
            'eiapp_cert' => 'required|mimes:pdf,doc,docx',
            'capacity_plan' => 'required|mimes:pdf,doc,docx',
            //'sea_trial_report' => 'required',
            'ship_safety_cert' => 'required|mimes:pdf,doc,docx',
            'nox_tech_file' => 'required|mimes:pdf,doc,docx',
            //'electric_power_table' => 'required',
            'iapp_cert' => 'required|mimes:pdf,doc,docx',
            'iapp_record' => 'required|mimes:pdf,doc,docx',
            'eiapp_cert' => 'required|mimes:pdf,doc,docx',
            'machinery_particulars' => 'required|mimes:pdf,doc,docx',
            'cert_classification' => 'required|mimes:pdf,doc,docx',
            'approved_cargo' => 'required|mimes:pdf,doc,docx',
            //'speedpower_curve' => 'required'
        ]);

        //upload all files
        $ship_particulars = $request->file('ship_particulars')->store('clientdocs');
        $cert_registry = $request->file('cert_registry')->store('clientdocs');
        $eiapp_cert = $request->file('eiapp_cert')->store('clientdocs');
        $capacity_plan = $request->file('capacity_plan')->store('clientdocs');
        if ($request->hasFile('sea_trial_report')) {
            $sea_trial_report = $request->file('sea_trial_report')->store('clientdocs');
        }
        $ship_safety_cert = $request->file('ship_safety_cert')->store('clientdocs');
        $nox_tech_file = $request->file('nox_tech_file')->store('clientdocs');
        if ($request->hasFile('electric_power_table')) {
            $electric_power_table = $request->file('electric_power_table')->store('clientdocs');
        }
        $iapp_cert = $request->file('iapp_cert')->store('clientdocs');
        $iapp_record = $request->file('iapp_record')->store('clientdocs');
        $machinery_particulars = $request->file('machinery_particulars')->store('clientdocs');
        $cert_classification = $request->file('cert_classification')->store('clientdocs');
        $approved_cargo = $request->file('approved_cargo')->store('clientdocs');
        if ($request->hasFile('speedpower_curve')) {
            $speedpower_curve = $request->file('speedpower_curve')->store('clientdocs');
        }


        Eexiprofile::where('id', $request->row_id)->update([
            //uploads start here
            'ship_particulars' => $ship_particulars,
            'cert_registry' => $cert_registry,
            'eiapp_cert' => $eiapp_cert,
            'capacity_plan' => $capacity_plan,
            'sea_trial_report' => $sea_trial_report,
            'ship_safety_cert' => $ship_safety_cert,
            'nox_tech_file' => $nox_tech_file,
            'electric_power_table' => $electric_power_table,
            'iapp_cert' => $iapp_cert,
            'iapp_record' => $iapp_record,
            'eiapp_cert' => $eiapp_cert,
            'machinery_particulars' => $machinery_particulars,
            'cert_classification' => $cert_classification,
            'approved_cargo' => $approved_cargo,
            'speedpower_curve' => $speedpower_curve
        ]);
    }



    public function listProfiles()
    {
        $data['profiles'] = Eexiprofile::get();
        return view('admin/list-profiles')->with($data);
    }

    public function viewProfile(Request $request)
    {
        $data['id'] = $request->id;
        $data['oneProfile'] = Eexiprofile::where('id', $request->id)->first();
        $data['other_files_list'] = OtherFile::where('eexiprofiles_id', $request->id)->get();
        //return $data['other_files_list'];
        return view('admin.view-profile')->with($data);
    }
}
