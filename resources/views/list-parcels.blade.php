@extends("layouts.dashboard")
@section('pagecontent')
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-12 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">

                <table class="table table-responsive">

                    <tr>
                        <th>Tracking Code</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Action</th>
                    </tr>
                    @foreach($parcels as $parcel)

                    <tr>
                        <td>
                            {{ $parcel->tracking_code }}
                        </td>
                        <td>
                            {{ $parcel->origin }}
                        </td>
                        <td>
                            {{ $parcel->destination }}
                        </td>
                        <td>
                            {{ $parcel->sender_name }}
                        </td>
                        <td>
                            {{ $parcel->recipient_name }}
                        </td>

                        <td>
                           <button class="btn btn-primary"><a href="tracking-details/{{ $parcel->id }}" style="color: white;">View</a></button>
                            <button class="btn btn-secondary"><a href="tracking-info/{{ $parcel->id }}" style="color:white">Edit</a></button></a>
                        </td>
                    </tr>
                    @endforeach

                </table>

                {{  $parcels->links() }}
            </div>
        </div>

    </div>
</div>
@endsection