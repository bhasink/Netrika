
@extends('layout.app')


@section('content')

    <style>
        .position-ref {
            position: relative;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .full-height {
            height: 50vh;
        }

        .code {
            font-size: 26px;
            padding: 0 15px 0 15px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }
    </style>

    <div class="flex-center position-ref full-height">
       <div>
           <div class="code">
               404            </div>

           <br>
           <p style="text-align: center;">        Sorry, but the page you requested could not be found!
           </p>
       </div>
    </div>
@endsection