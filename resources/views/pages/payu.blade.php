
@extends('layout.app')


@section('content')

    <style>

        .eq-btn:hover {
            background-color: #002e5b;
            border: 3px solid #002e5b;
            color: #ffffff;
        }

        .breadcrumbs {
            padding: 0rem 1.0rem;
        }
        .payu {
            height: 500px;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/img/banner/payment.jpg);
            background-size: cover;
            background-position: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        @media screen and (max-width: 600px) {
            .payu {
                height: 500px;
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/img/banner/payment-600x500.jpg) !important;
                background-size: cover;
                background-position: 100% 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
    </style>
    <div class="team-banner payu">
        <p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Pay </span> Now</p>
    </div>
    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Pay Now</span></a></span>
            </div>
        </div>
    </div>
    <section class="white-paper-page" id="white-paper-page"  style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row" style="padding-bottom: 2rem;">

                <div class="col-md-12">
                    <div class="custom_heading">
                        <h2 style="text-align: center;" class="custom-title">Fill Below details:</h2>
                        <p></p>
                    </div>
                    <form id="quick-enquiry-form" class="quick-enquiry-form" method="post" action="/payu">

                        @csrf

                        <div class="form-group">
                            <div class="row  justify-content-center">
                                <div class="col-md-6">

                                    <div class="input-group">
                                        <input id="name" name="fname" type="text" class="form-control" placeholder="First Name*" required>
                                        <span class="error"  id="error-name"></span>
                                    </div>
                                    <div class="input-group">
                                    <input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name" required>
                                    <span class="error" style="display: none;">This field is required</span>
                                    </div>

                                    <div class="input-group">
                                        <input id="phone_number" name="phone_number" type="number" class="form-control" placeholder="Phone Number*" required>
                                        <span class="error"  id="error-phone_number"></span>
                                    </div>

                                    <div class="input-group">
                                        <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>
                                        <span class="error" id="error-email"></span>
                                    </div>
                                    <div class="input-group">
                                        <input id="address" name="address" type="text" class="form-control" placeholder="Address*" required>
                                        <span class="error"  id="error-organization"></span>
                                    </div>
                                    <div class="input-group">
                                        <input type="number"  id="Amount" name="Amount" class="form-control" placeholder="Amount*" required>
                                        <span class="error"  id="error-phone_number"></span>
                                    </div>
                                    <div class="input-group">
                                        <button id="form-submit" type="submit" class="eq-btn">Pay Now<i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
                                    </div>

                                </div>


                            </div> <!--row ends here-->

                        </div>  <!--form-group ends here-->
                    </form>

                </div>

            </div>
        </div>
    </section>

    <section class="cta" id="cta">
        <div class="container-fuld">
            <div class="row">

                <h5 class="cta-title"> Achieving Excellence with A Global Vision
                </h5>
            </div>
        </div>
    </section>
@endsection

@section('script')




<script>
document.getElementsByTagName('meta')["keywords"].content = "Pay Now";
document.getElementsByTagName('meta')["description"].content = "Pay now - Netrika.";
document.title = "Pay Now | Netrika";
</script>

@endsection