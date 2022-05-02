@extends("layouts.dashboard")
@section('pagecontent')
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-10 offset-md-1 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">

                @if(Auth::user()->hasRole('admin'))
                dddsfs
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ship's Name</td>
                            <td>{{ $oneProfile->ship_name }}</td>
                        </tr>
                        <tr>
                            <td>Ship Type</td>
                            <td>{{ $oneProfile->ship_type }} </td>
                        </tr>
                        <tr>
                            <td>IMO Number</td>
                            <td>{{ $oneProfile->imo_number }} </td>
                        </tr>
                        <tr>
                            <td>Company Name</td>
                            <td>{{ $oneProfile->company_name }} </td>
                        </tr>
                        <tr>
                            <td>Contact's Name</td>
                            <td>{{ $oneProfile->contact_fname }} {{ $oneProfile->contact_lname }}</td>
                        </tr>
                        <tr>
                            <td>Contact Email</td>
                            <td>{{ $oneProfile->contact_email }} </td>
                        </tr>
                        
                    </tbody>
                </table>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Document Name</th>
                            <th scope="col">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ship's Particulars</td>
                            <td><a href="{{ asset('storage/'.$oneProfile->ship_particulars) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Certificate of Registry</td>
                            <td><a href="{{ asset('storage/'.$oneProfile->cert_registry) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>EIAPP Certificate</td>
                            <td><a href="{{ asset('storage/'.$oneProfile->eiapp_cert) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Capacity Plan</td>
                            <td><a href="{{ asset('storage/'.$oneProfile->capacity_plan) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Sea Trial Report</td>
                            <td><a href="{{ asset('storage/'.$oneProfile->sea_trial_report) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Ship Safety Certificate</td>
                            <td><a href="{{ asset('storage/'.$oneProfile->ship_safety_cert) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>NOx Tech File</td>
                            <td><a href="{{ asset('storage/'.$oneProfile->nox_tech_file) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Electric Power Table </td>
                            <td><a href="{{ asset('storage/'.$oneProfile->electric_power_table) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>IAPP Certificate </td>
                            <td><a href="{{ asset('storage/'.$oneProfile->iapp_cert) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>IAPP Record </td>
                            <td><a href="{{ asset('storage/'.$oneProfile->iapp_record) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Marchinery Particulars </td>
                            <td><a href="{{ asset('storage/'.$oneProfile->machinery_particulars) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Certificate of Classification </td>
                            <td><a href="{{ asset('storage/'.$oneProfile->cert_classification) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Approved Cargo </td>
                            <td><a href="{{ asset('storage/'.$oneProfile->approved_cargo) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        <tr>
                            <td>Speedpower Curve </td>
                            <td><a href="{{ asset('storage/'.$oneProfile->speedpower_curve) }}" target="_blank"><button class="btn btn-primary">Download</button></a></td>
                        </tr>
                        
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    @endsection