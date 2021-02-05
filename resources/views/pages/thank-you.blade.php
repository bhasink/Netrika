
@extends('layout.app')


@section('content')


    <style>

        .upcoming-page {
            height: 500px;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/img/thank-you-1480x700.jpg);
            background-size: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media screen and (max-width: 600px) {

            .upcoming-page {
                height: 500px;
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/img/thank-you-600x500.jpg) !important;
                background-size: 100% 100% !important;
                display: flex;
                justify-content: center;
                align-items: center;
            }

        }





    </style>



    <div class="team-banner upcoming-page">
        <div>

            {{--<p class="scrollanimation animated bounceIn adl-2">--}}
                {{----}}
                {{--<span style="color: rgb(253, 228, 40);">Thankyou for sharing--}}
 {{--</span>your details.</p>--}}

         <h5 class="sub-heading-thank-you scrollanimation animated bounceIn adl-2"></h5>

        </div>

    </div>


    <section class="cta" id="cta">
        <div class="container-fuid">
            <div class="row">

                <h5 class="cta-title"> Achieving Excellence with A Global Vision
                </h5>
                
            </div>
        </div>
    </section>
@endsection

@section('script')

    <script type="text/javascript">

        $(".sidebar-testimonial").slick({
            dots: false,
            prevArrow: false,
            nextArrow: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1
        });

    </script>
    <script type="text/javascript">

        $(".sidebar-cases").slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });

    </script>


@endsection
