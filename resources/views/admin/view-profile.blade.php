@extends("layouts.dashboard")
@section('pagecontent')
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-10 offset-md-1 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">

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
                <br>
                <div class="accordion col" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ship's Info & Contact Info
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
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
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Files For Evaluation
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">

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
                                            <td>Machinery Particulars </td>
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
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Other Files
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="{{ route('uploadotherfiles') }}">
                                    @csrf
                                    <div class="row">
                                        <p>The following files can be uploaded from here and can also be found here after uploads:</p>
                                        <br>
                                        <ul>
                                            <li>Proof of initial payment</li>
                                            <li>EEXI Initial Assessment</li>
                                            <li>Proof of Compliance with Required EEXI</li>
                                            <li>Proof of final payment</li>
                                            <li>EEXI Technical File</li>
                                        </ul>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label>File Description</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="hidden" value="{{ $id }}" name="id">
                                            <label>Select File</label>
                                            <input type="file" class="form-control" name="other_file_upload">
                                            <input type="submit" value="Save" class="btn btn-primary mt-3">
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Document Name</th>
                                            <th scope="col">Uploaded By</th>
                                            <th scope="col">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($other_files_list as $other_file)
                                        <tr>
                                            <td>{{ $other_file->description }}</td>
                                            <td>{{ $other_file->uploaded_by }}</td>
                                            <td><a href="{{ asset('storage/'.$other_file->other_file_upload) }}"><button class="btn btn-primary">Download</button></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Financials - Payments, Proof of Payment, etc.
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                            @if(!Auth::user()->hasPermission('admin'))
                                <form method="post" action="{{ route('askforpayment') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <label>File Description</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="hidden" value="{{ $id }}" name="id">
                                            <label>Amount</label>
                                            <input type="text" class="form-control" name="amount">
                                            <input type="submit" value="Save" class="btn btn-primary mt-3">
                                </form>
                                @endif
                            </div>
                            <hr>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                @if($transactions == '')
                                Oops! Nothing found!
                                @endif
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->trans_description }}</td>
                                    <td>${{ number_format($transaction->trans_amount) }}</td>
                                    <td><span class="badge{{ $transaction->trans_status == NULL ? ' badge-danger' : 'badge-primary'  }}">{{ $transaction->trans_status == NULL ? 'Unpaid' : 'Paid'  }}</span></td>
                                    <td>
                                        <form id="paymentForm">
                                            <input type="hidden" id="email-address" required value="{{ $oneProfile->contact_email }}" />
                                            <input type="hidden" id="amount" required value="{{ $transaction->trans_amount }}" />
                                            <input type="hidden" id="first-name" value="{{ $oneProfile->contact_fname }}" />
                                            <input type="hidden" id="last-name" value="{{ $oneProfile->contact_lname }}" />
                                            <button class="btn btn-primary" type="submit" onclick="payWithPaystack()"> Pay </button>
                                        </form>
                                            @if(Auth::user()->hasPermission('admin'))
                                            <a href="{{ url('mark-as-paid') }}/{{ $id }}"><button class="btn btn-primary"> Mark as Paid </button></a>
                                            @endif
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
@endsection