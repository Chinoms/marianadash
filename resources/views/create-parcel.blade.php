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
                <div class="col-md-6">
                    <form method="post" action="register-parcel">
                        @csrf
                        <label class="control-label mt-3" for="origin">
                            Parcel Origin
                        </label>
                        <input class="form-control" name="origin" value="{{old('origin')}}" type="text" />

                        <label class="control-label mt-3" for="destination">
                            Parcel Destination
                        </label>
                        <input class="form-control" name="destination" value="{{old('destination')}}" type="text" />

                        <label class="control-label mt-3" for="sender_name">
                            Sender's Name
                        </label>
                        <input class="form-control" name="sender_name" value="{{old('sender_name')}}" type="text" />

                        <label class="control-label mt-3" for="sender_address">
                            Sender's Address
                        </label>
                        <input class="form-control" name="sender_address" value="{{old('sender_address')}}" type="text" />

                        <label class="control-label mt-3" for="sender_phone">
                            Sender's Phone Number
                        </label>
                        <input class="form-control" name="sender_phone" value="{{old('sender_phone')}}" type="text" />


                </div>

                <div class="col-md-6">
                    <label class="control-label mt-3" for="recipient_name">
                        Recipient's Name
                    </label>
                    <input class="form-control" name="recipient_name" value="{{old('recipient_name')}}"type="text" />

                    <label class="control-label mt-3" for="recipient_address">
                        Recipient's Address
                    </label>
                    <input class="form-control" name="recipient_address" value="{{old('recipient_address')}}" type="text" />


                    <label class="control-label mt-3" for="recipient_phone">
                        Recipient's Phone Number
                    </label>
                    <input class="form-control" name="recipient_phone" value="{{old('recipient_phone')}}" type="text" />


                    <label class="control-label mt-3" for="parcel_description">
                        Parcel Description
                    </label>
                    <input class="form-control" name="parcel_description" value="{{old('parcel_description')}}" type="text" />

                    <label class="control-label mt-3" for="parcel_description">
                        Select Delivery Type
                    </label>
                    <select class="form-control" name="delivery_type">
                        <option selected>Select one</option>
                        <option value="pickup">To be picked up</option>
                        <option value="delivery">For home/office delivery</option>
                    </select>
                    <input type="submit" class="btn btn-primary mt-5 pul-right" value="Add Parcel">
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection