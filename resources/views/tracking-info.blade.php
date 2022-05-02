@extends("layouts.dashboard")
@section('pagecontent')
<div class="container">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>
    <div id="addparcel" class="col-md-10 offset-md-1 rounded mb-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                <div class="col-md-6">
                    <form method="post" action="{{route('update-tracking')}}">
                        @csrf
                        <label class="control-label mt-3" for="origin">
                            Current Location
                        </label>
                        <input class="form-control" name="location" value="{{old('location')}}" type="text" />

                </div>

                <div class="col-md-6">
                    <input type="hidden" name="parcel_id" value="{{$id}}">
                    <label class="control-label mt-3" for="parcel_description">
                        Select Parcel Status
                    </label>
                    <select class="form-control" name="status">
                        <option selected>Select one</option>
                        @foreach($statusMessages as $message)
                        <option value="{{ $message->id }}">{{ $message->status_name }}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="btn btn-primary mt-5 pul-right" value="Update Parcel">
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection