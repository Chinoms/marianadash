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

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ship Name</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(Auth::user()->hasPermission('admin'))
                        @foreach($profiles as $profile)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $profile->ship_name }}</td>
                            <td>{{ $profile->contact_fname}} {{ $profile->contact_lname }}</td>
                            <td>{{ $profile->contact_email }} </td>
                            <td><a href="view-profile/{{ $profile->id }}"><button class="btn btn-primary">View Profile</button></a></td>
                        </tr>
                        @endforeach
                        @endif

                        @if(!Auth::user()->hasPermission('admin'))
                        @foreach($my_profiles as $my_profile)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $my_profile->ship_name }}</td>
                            <td>{{ $my_profile->contact_fname}} {{ $profile->contact_lname }}</td>
                            <td>{{ $my_profile->contact_email }} </td>
                            <td><a href="view-profile/{{ $profile->id }}"><button class="btn btn-primary">View Profile</button></a></td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    @endsection