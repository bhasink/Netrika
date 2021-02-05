<!DOCTYPE html>
<html>
<head>
    <title>Netrika Leads</title>
</head>
<body>
<h2 style="color: #000000;">{{ $details['title'] }}</h2>


@foreach($details['body'] as $key=>$con_det)


    @if($key != "_token")

        @if($key != "resume")

            @if($key != "white_paper_id")

                @if($key != "g-recaptcha-response")

    <p style="color: #000000;"><b style="text-transform: capitalize;">{{$key}}: </b>{{$con_det}}</p>

            @endif

            @endif

        @endif

    @endif


@endforeach

@php

    $mytime = Carbon\Carbon::now();

@endphp

<p style="color: #000000;"><b style="text-transform: capitalize;">Created At: </b>{{$mytime->toDateTimeString()}}</p>



<p>Thank you</p>
<p>https://www.netrika.com</p>
</body>
</html>