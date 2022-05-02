@extends("layouts.dashboard")
@section('pagecontent')
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-10 offset-md-1 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">
                <div col-lg-12>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                @if(Auth::user()->hasRole('admin'))  
                    dddsfs
                @endif
                <form action="{{ route('saveprofile') }}" method="post" enctype="multipart/form-data" class="row">
                    @csrf
                    <div class="col-md-6">
                        <label class="control-label mt-3" for="ship_name">
                            Ship's Name
                        </label>
                        <input class="form-control" name="ship_name" value="{{old('ship_name')}}" type="text" />

                        <label class="control-label mt-3" for="imo_number">
                            IMO Number
                        </label>
                        <input class="form-control" name="imo_number" value="{{old('imo_number')}}" type="text" />

                        <label class="control-label mt-3" for="ship_type">
                            Ship Type
                        </label>
                        <input class="form-control" name="ship_type" value="{{old('ship_type')}}" type="text" />

                        <label class="control-label mt-3" for="company_name">
                            Company Name
                        </label>
                        <input class="form-control" name="company_name" value="{{old('company_name')}}" type="text" />


                    </div>

                    <div class="col-md-6">
                        <label class="control-label mt-3" for="contact_fname">
                            Contact Person's First Name
                        </label>
                        <input class="form-control" name="contact_fname" value="{{old('contact_fname')}}" type="text" />

                        <label class="control-label mt-3" for="contact_lname">
                            Contact Person's Surname
                        </label>
                        <input class="form-control" name="contact_lname" value="{{old('contact_lname')}}" type="text" />


                        <label class="control-label mt-3" for="contact_email">
                            Email Address
                        </label>
                        <input class="form-control" name="contact_email" value="{{old('contact_email')}}" type="text" />



                    </div>
                    <div class="col-md-6">
                        <label class="control-label mt-3" for="ship_particulars">
                            Ship's Particulars
                        </label>
                        <input class="form-control" name="ship_particulars" type="file" />

                        <label class="control-label mt-3" for="cert_registry">
                            Certificate of Registry
                        </label>
                        <input class="form-control" name="cert_registry" type="file" />

                        <label class="control-label mt-3" for="eiapp_cert">
                            EIAPP Certificate
                        </label>
                        <input class="form-control" name="eiapp_cert" type="file" />

                        <label class="control-label mt-3" for="capacity_plan">
                            Capacity Plan
                        </label>
                        <input class="form-control" name="capacity_plan" type="file" />

                        <label class="control-label mt-3" for="sea_trial_report">
                            Sea Trial Report
                        </label>
                        <input class="form-control" name="sea_trial_report" type="file" />

                        <label class="control-label mt-3" for="ship_safety_cert">
                            Ship Safety Equipment Certificate
                        </label>
                        <input class="form-control" name="ship_safety_cert" type="file" />

                        <label class="control-label mt-3" for="nox_tech_file">
                            NOx Technical File
                        </label>
                        <input class="form-control" name="nox_tech_file" type="file" />

                        <label class="control-label mt-3" for="electric_power_table">
                            Electric Power Table for EEDI (if available)
                        </label>
                        <input class="form-control" name="electric_power_table" type="file" />

                    </div>


                    <div class="col-md-6">
                        <label class="control-label mt-3" for="iapp_cert">
                            IAPP Certificate
                        </label>
                        <input class="form-control" name="iapp_cert" type="file" />

                        <label class="control-label mt-3" for="iapp_record">
                            IAPP Record of Construction and Equipment
                        </label>
                        <input class="form-control" name="iapp_record" type="file" />

                        <label class="control-label mt-3" for="eiapp_cert">
                            EIAPP Certificate
                        </label>
                        <input class="form-control" name="eiapp_cert" type="file" />

                        <label class="control-label mt-3" for="machinery_particulars">
                            Machinery Particulars/Machinery Operating Manual
                        </label>
                        <input class="form-control" name="machinery_particulars" type="file" />

                        <label class="control-label mt-3" for="cert_classification">
                            Certificate of Classification
                        </label>
                        <input class="form-control" name="cert_classification" type="file" />

                        <label class="control-label mt-3" for="approved_cargo">
                            Record of Approved Cargo Ship Safety Equipment
                        </label>
                        <input class="form-control" name="approved_cargo" type="file" />

                        <label class="control-label mt-3" for="speedpower_curve">
                            Speed-power Curve
                        </label>
                        <input class="form-control" name="speedpower_curve" type="file" />

                    </div>
                    <input type="submit" class="btn btn-primary mt-5 pul-right" value="Submit Request">
                </form>
            </div>

        </div>
    </div>
    @endsection