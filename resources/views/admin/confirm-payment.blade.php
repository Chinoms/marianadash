<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jun 2021 15:01:38 GMT -->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Parcel Tracker Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- <link rel="icon" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/icon.ico" type="image/x-icon" /> -->

    <!-- Fonts and icons -->

    <script>
        window.setTimeout(function() {

            // Move to a new location or you can do something else
            window.location.href = "{{ url('list-profiles') }}";

        }, 5000);
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/atlantis.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
</head>

<body>

    <h1 class="text-center" style="padding-top:20%">Payment verified. Thank you. We will be in touch shortly.</h1>
    <span class="text-center"><small class="text-center">Redirecting you shortly . . .</small></span>
</body>

</html>