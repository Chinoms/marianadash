<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OtherFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtherFilesController extends Controller
{
    public function uploadOtherFile(Request $request){

        $request->validate([
            'description' => 'required',
            'other_file_upload' => 'required|mimes:pdf,doc,docx'
        ]);
        $other_files = new OtherFile();
        $other_files->eexiprofiles_id = $request->id;
        $other_files->description = $request->description;
        $other_files->uploaded_by = Auth::user()->name;
        //$other_files->other_file_upload = $request->other_file_upload;

        //upload files
        $other_files->other_file_upload = $request->file('other_file_upload')->store('otherfiles');
        $other_files->save();
        return back()->with('message', 'File successfully uploaded.');
    }

    // public function listOtherFiles(Request $request){
       

    // }
}
