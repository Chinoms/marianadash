<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>
<div style="width: 100%; height: 200px; background: #F00000;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #DC281E, #F00000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #DC281E, #F00000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

</div>
<div class="container" style="margin-top: -100px; background-color: white">
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
                <div class="col-md-12">
                    <form method="post" action="{{route('tracking-detail')}}">
                        @csrf
                        <input type="hidden" name="parcel_id" value="">
                        <label class="control-label mt-3" for="origin">
                            Enter tracking code
                        </label>
                        <option></option>
                        <input class="form-control" name="trackingcode" value="{{old('trackingcode')}}" type="text" />


                        <input type="submit" class="btn btn-primary mt-5">



                </div>

                </form>
            </div>
        </div>

    </div>
</div>