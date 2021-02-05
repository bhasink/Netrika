@extends('layout.app')


@section('content')

    <style>
        /*#sticky {*/
            /*height:100%;*/
            /*!*float:left;*!*/
        /*}*/
        /*#sticky.stick {*/
            /*position: fixed;*/
            /*top: 0;*/
            /*z-index: 10;*/
        /*}*/

        .sidebarpost-image img{
            width: 100%;
            height: auto;
        }

        .team-banner.service-banner p {
            width: 800px;
            white-space: normal;
            line-height: initial;
        }
        .services-b{
            margin-left: 12px;
        }
        .team-banner{
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/services/banner/{{$data['get_service_data']->banner_image}}');
            background-size: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
        }

        @media screen and (max-width: 600px) {
            .team-banner{
                background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/services/banner/res/{{$data['get_service_data']->banner_image_res}}') !important;
                background-size: cover;
            }
            .services-b{
                margin-left: 0px;
            }
        }
    </style>

    <div class="team-banner service-banner">

        <?php
        $total_word_count = str_word_count($data['get_service_data']->name);
        $total_word_count = $total_word_count/2;
        ?>

        <p style="background-color:rgba(0, 46, 91, 0);" class="scrollanimation animated bounceIn adl-2"><span style="background-color: rgba(0, 46, 91, 0.5);padding: 0px 10px;"> <span style="color: rgb(253, 228, 40);">{!! implode(' ', array_slice(explode(' ', $data['get_service_data']->name), 0, $total_word_count)) !!}</span> {!! implode(' ', array_slice(explode(' ', $data['get_service_data']->name), $total_word_count, 20)) !!}</span></p>

    </div>

<div class="page_title">
    <div class="container-fluid">
        <div class="breadcrumbs services-b">
            <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
            <span><a href="#"><span property="name">Services</span></a></span>
            <span><i class="fa fa-angle-right"></i></span>
            <span><a href="{{$data['get_service_cat']->slug}}"><span>{{$data['get_service_cat']->name}}</span></a></span>
            <span><i class="fa fa-angle-right"></i></span><span>
            <span>{{$data['get_service_data']->name}}</span></span>
        </div>
    </div>
</div>


<section class="services-page" id="services-page" style="background-color: #ffffff;">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9 service-box-img">

                <div class="our-expert">

                        <div class="custom_heading">
                            <h2 style="text-align: center" class="custom-title">Our Experts</h2>
                            <p></p>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="wpb_wrapper">
                                    <div class="p-box">


                                        @if(isset($data['get_team']))

                                            @foreach($data['get_team'] as $key=>$get_team)

                                                <div class="mainbox">
                                                    <div class="cards">

                                                        <div class="img-box">
                                                            <img src="/img/team/page/{{$get_team->user_image}}" alt="Sanjay Kaushik">
                                                        </div>

                                                        <div class="info">
                                                            <span><b>{{$get_team->name}}</b></span>
                                                            <p>{{$get_team->designation}}</p>
                                                            <p>{!! $get_team->certifications !!}</p>

                                                        </div>
                                                        <div class="footer-box ">
                                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>{{$get_team->phone}}</span>
                                                            <a href="mailto:{{$get_team->email}}"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                            <a href="/team-profile/{{$get_team->pdf_data}}">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            @endforeach

                                        @endif






                                    </div>


                                </div>
                            </div>

                        </div>  <!--container ends here-->

                </div>


                @if(isset($data['get_service_data']))
                    <div class="services-content-box">

                        <div class="custom_text con_panel">

                                {!! $data['get_service_data']->main_content !!}

                        </div>

                    </div>
                @endif

                @if(isset($data['get_icon_style']))

                    <div class="icon-services">
                        <div class="container">
                            <div class="custom_heading">
                                <h2 style="text-align: left;font-size: 20px;" class="custom-title">{{$data['get_service_data']->structure_two_title}}</h2>
                                <p style="justify-content: left;"></p>
                            </div>

                            <div class="custom_text">
                                <p> {!! $data['get_service_data']->structure_two_title_para !!}</p>
                            </div>


                            <div class="row">

                                    @foreach($data['get_icon_style'] as $key=>$get_icon_style)

                                        <div class="col-md-4">
                                            <div class="icon-infobox">
                                                <div class="infobox-icon">
                                                    <div class="infobox-icon-wrap">
                                                        <img style="width: 45%" src="/img/services/icons/{{$get_icon_style->icon}}" alt="Service Icons">
                                                    </div>
                                                </div>
                                                <div class="infobox-content">
                                                    <h5>{{$get_icon_style->text}}</h5>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                            </div>
                        </div>
                    </div>

                @endif


                @if(isset($data['get_flip_style']))
                <div class="services-content-box">

                    <div class="custom_heading">
                        <h2 style="text-align: left;font-size: 20px;" class="custom-title">{{$data['get_service_data']->structure_four_title}}</h2>
                        <p style="justify-content: left;"></p>
                    </div>

                <div class="cardst">


                        @foreach($data['get_flip_style'] as $key=>$get_flip_style)


                    <div class="col-1-of-2">
                        <div class="cards">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">

                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">{{$get_flip_style->front_text}}</span>

                                </h4>

                            </div>
                            <div class="card__side card__side--back card__side--back-1">
                                {!! $get_flip_style->back_text !!}
                            </div>
                        </div>
                    </div>

                        @endforeach


                </div>

            </div>
                @endif

{{--{{dd($data['get_list_style'])}}--}}
                @if(isset($data['get_list_style']))
                    <div class="icon-services">
                        <div class="container">
                            <div class="custom_heading">
                                <h2 style="text-align: left;font-size: 20px;" class="custom-title">{{$data['get_service_data']->structure_one_title}}</h2>
                                <p style="justify-content: left;"></p>
                            </div>

                            <div class="custom_text">
                                <p> {!! $data['get_service_data']->structure_one_title_para !!}</p>
                            </div>


                            <div class="row">



                                    <ul>

                                        @foreach($data['get_list_style'] as $key=>$get_list_style)

                                            <li>{{$get_list_style->list_text}}</li>

                                        @endforeach

                                    </ul>


                            </div>
                        </div>
                    </div>
                @endif




            </div>



            <div id="sticky-anchor"></div>
            <div class="col-md-3 team-sd sl">
                <div id="sticky">
                <div class="service-box-sidebar">
                    <ul id="menu-sidebar" class="menu-sidebar">

                        <style>
                            .sbs {
                                color: #002e5b;
                                text-decoration: none !important;
                                border-left: 5px solid #e30016 !important;
                                display: inline-block;
                                padding: 14px 0 14px 18px;
                                transition: all .3s ease;
                            }
                        </style>

{{--                        {{dd($data['get_service_cat']->slug)}}--}}

{{--                        {{dd($data['get_service_data']->slug)}}--}}

                        @if(isset($data['get_related_service']))

                            @foreach($data['get_related_service'] as $key=>$get_related_service)

                            <li class="sidebar-menu-item">
                                <a href="/services/{{$data['get_service_cat']->slug.'/'.$get_related_service->slug}}" class="{{$data['get_service_data']->slug == $get_related_service->slug ? 'sbs':''}}">{{$get_related_service->name}}</a>
                            </li>

                            @endforeach

                        @endif

                    </ul>
                </div>

                <div class="sidebar-card">
                    <div class="sidebar-card-title"> Reach out to us
                    </div>
                    <p><span>Contact us at the Netrika office nearest to you or submit a business inquiry online.</span></p>
                    <div class="sidebar-btn-box">
                        <a href="#"  data-toggle="modal" data-target="#exampleModalCenter" class="sidebar-btn">
                            <span class="sidebar-btn-icons"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                            <span>Call Now</span>
                        </a>
                    </div>
                </div>

                <div class="sidebar-brochure">
                    <div class="brochure-btn-box">
                        <a target="_blank" href="/pdf/netrika-consulting-pvt-ltd-brochure.pdf" class="brochure-btn">
                            <span class="sidebar-btn-icons"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                            <span>Corporate Brochure</span>
                        </a>
                    </div>
                </div>


                <div class="sidebar-testimonial-box">
                    <div class="sidebar-testimonial slider">

                        @if(isset($data['get_quotes']))

                            @foreach($data['get_quotes'] as $key=> $get_quotes)

                                <div>
                                    <div class="testimonialsidebar"><p class="hb">{{$get_quotes->quotes}}</p>
                                    </div>
                                    <div class="testimonialsidebar-info">
                                        <div class="testimonialsidebar-image"><img src="/img/team/quotes/{{$get_quotes->user_image}}" alt="Directors Images" width="50" height="50"></div>
                                        <div class="testimonialsidebar-text">
                                            <div class="sidebarname hb">{{$get_quotes->name}}</div>
                                            <div class="sidebarcompany hb">
                                                {{$get_quotes->designation}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        @endif

                    </div>
                </div>


                @if($data['get_casebook']->first() != null)

                <div class="sidebar-casestudies-box">
                    <h6 class="sidebar-custom-title">Casebook
                    </h6>
                    <div class="kkb">
                        <p class="hnc"></p>
                    </div>
                   <div class="cbv">
                       <a href="/casebook">View All ></a>
                   </div>

                    <div class="sidebar-cases slider">

                        @foreach($data['get_casebook'] as $key=>$get_casebook)

{{--                            {{dd($get_casebook)}}--}}

                        <div>
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/{{$get_casebook->slug}}"><img src="/img/case-studies/{{$get_casebook->thumbnail}}" alt="Casebooks"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/{{$get_casebook->slug}}">{{$get_casebook->title}}
                                        </a></h5>
                                    <div class="sidebarpost-summary">{!! \Illuminate\Support\Str::limit($get_casebook->short_des_main,100) !!}</div></div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>

                    @endif


                    @if($data['get_white_paper']->first() !=null)

                <div class="sidebar-casestudies-box">
                    <h6 class="sidebar-custom-title">Whitepaper and Surveys
                    </h6>
                    <div class="kkb">
                        <p class="hnc"></p>
                    </div>
                    <div class="cbv">
                        <a href="/white-paper">View All ></a>
                    </div>

                    <div class="sidebar-cases slider">

                        @foreach($data['get_white_paper'] as $key=>$get_white_paper)

                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#"><img src="/img/white-paper/{{$get_white_paper->image}}"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#">{{$get_white_paper->title}}</a></h5>

                                       <div class="wpd">
                                           <a href="/white-paper/{{$get_white_paper->slug}}">Download</a>
                                       </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>

                        @endif

            </div>

        </div>



        </div>
    </div>
</section>

    <section class="cta cta2" id="cta">
        <div class="container">
            <div class="row">

                <div class="col-md-12 cta-box">
                    <div class="cta-content">
                        <h3 class="cta-title">Subscribe to our Newsletter</h3>
                    </div>



                    <div class="cta-action">
                    <a href="#"  class="custom-all-btn cta-btn" data-toggle="modal" data-target="#exampleModalCentersss">
                    <span>Subscribe</span>
                    <i class="fa fa-chevron-right"></i>
                    </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="exampleModalCentersss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content toll-free">
                <div class="modal-header">
                    {{--<h5 class="modal-title" id="exampleModalLongTitle"></h5>--}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="enquery-contact">
                                <div class="custom_heading">
                                    <h5 style="font-weight:700;color: #ffffff;text-align: left;" class="custom-title2 ct adl-2">Subscribe to our Newsletter</h5><p class="hnc"></p>
                                </div>
                                <form id="quick-enquiry-form" method="post" action="/newsletter" class="quick-enquiry-form" enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <input id="phone_number" name="phone_number" type="text"  class="form-control" placeholder="Phone Number" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <input id="designation" name="designation" type="text" class="form-control" placeholder="Designation" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>




                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <input id="organisation" name="organisation" type="text" class="form-control" placeholder="Organisation" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <div class="gg-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak" required></div>

                                                </div>

                                                <div class="input-group">
                                                    <button style="    margin-top: 0.6rem;" type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
                                                </div>


                                            </div>


                                        </div> <!--row ends here-->

                                    </div>  <!--form-group ends here-->
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <section class="quick-enquiry" id="qef">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="custom_sub_heading">
                    <h5 style="text-align: left;" class="custom-sub-title quick-enquiry-title">Quick Enquiry
                    </h5>
                    <div class="cv custom_heading"><p></p></div>
                </div>
                <form id="quick-enquiry-form" class="quick-enquiry-form">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="input-group">
                                    <input id="name1" name="name" type="text" class="form-control" placeholder="Name*" required>
                                    <span class="error"  id="error-name"></span>
                                </div>
                                {{--<div class="input-group">--}}
                                    {{--<input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name" required>--}}
                                    {{--<span class="error" style="display: none;">This field is required</span>--}}
                                {{--</div>--}}

                                <div class="input-group">
                                    <input id="organization1" name="organization" type="text" class="form-control" placeholder="Organization Name" required>
                                    <span class="error"  id="error-organization"></span>
                                </div>

                                <div class="input-group">
                                    <input id="phone_number1" name="phone_number" type="text" class="form-control" placeholder="Phone Number*" required>
                                    <span class="error"  id="error-phone_number"></span>
                                </div>

                                <div class="input-group">
                                    <input id="email1" name="email" type="email" class="form-control" placeholder="Email*" required>
                                    <span class="error" id="error-email"></span>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="input-group">
                                    <select name="service" id="services" class="form-control" required>
                                        <option value="">Services</option>

                                        @if(isset($data['get_all_services']))
                                            @foreach($data['get_all_services'] as $key=>$get_all_services)
                                                <option value="{{$get_all_services->name}}">{{$get_all_services->name}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                    <span class="error" id="error-services"></span>
                                </div>

                                <div class="input-group">
                                    <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject" required>
                                    <span class="error"  id="error-subject"></span>
                                </div>

                                <div class="input-group">
                                    <textarea id="message" name="message" cols="80" rows="5" class="form-control messagebox" placeholder="Your Message *" required></textarea>
                                    <span class="error" id="error-message"></span>
                                </div>

                                <div class="input-group" style="margin: 1em 0em;">
                                    <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak"></div>

                                </div>


                                <div class="input-group">

                                    <input id="a_data_value" type="text" name="a_data_value" style="display:none !important" tabindex="-1" autocomplete="off" value="kbees">


                                    <button id="form-submit" type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
                                </div>

                            </div>

                        </div> <!--row ends here-->

                    </div>  <!--form-group ends here-->
                </form>

                <div class="con-thnx" style="display: none;">
                    Successfully Submitted! We'll get back to you later.
                </div>
            </div>

        </div>
    </div>
</section>
<section class="cta" id="cta">
    <div class="container">
        <div class="row">

            <div class="col-md-12 cta-box">
                <div class="cta-content">
                    <h3 class="cta-title">{{$data['get_service_cat']->quotes}}</h3>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection

@section('script')

<script type="text/javascript">
    $(".sidebar-testimonial").slick({
        autoplay: true,
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
<script type="text/javascript">
    $(".affiliations-client").slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });
</script>
<script type="text/javascript">
    $(".testimonials").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $(".con_panel h1").after('<div class="custom_heading"><p></p></div>');
    $(".con_panel h1").addClass('custom-title');
    $(".con_panel h2").after('<div class="cv custom_heading"><p></p></div>');
    $(".con_panel h2").css('color','#002e5b').css('font-size','20px');
</script>


<script type="text/javascript">



    $('#form-submit').on('click',function (e) {

        e.preventDefault();

        var name = $("#name1").val();
        var organization = $("#organization1").val();
        var phone_number = $("#phone_number1").val();
        var email = $("#email1").val();
        var services = $("#services").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var a_data_value = $("#a_data_value").val();

        if(grecaptcha.getResponse() == "") {
            alert('Recaptcha validaiton failed!');
        }else {


            $.ajax({
                type: 'POST',
                url: "{{ route('services') }}",
                data: {
                    name: name,
                    email: email,
                    phone_number: phone_number,
                    message: message,
                    services: services,
                    subject: subject,
                    a_data_value:a_data_value,
                    organization: organization,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (data) {
                    if ($.isEmptyObject(data.error)) {
                        window.location.replace("/thank-you");
                    } else {
                        console.log(data);

                        if (data.error.message) {
                            $('#error-message').css('color', 'red').html(data.error.message[0]);
                        } else {
                            $('#error-message').html('');
                        }
                        if (data.error.phone_number) {
                            $('#error-phone_number').css('color', 'red').html(data.error.phone_number[0]);
                        } else {
                            $('#error-phone_number').html('');
                        }

                        if (data.error.email) {
                            $('#error-email').css('color', 'red').html(data.error.email[0]);
                        } else {
                            $('#error-email').html('');
                        }

                        if (data.error.name) {
                            $('#error-name').css('color', 'red').html(data.error.name[0]);
                        } else {
                            $('#error-name').html('');
                        }

                        if (data.error.services) {
                            $('#error-services').css('color', 'red').html(data.error.services[0]);
                        } else {
                            $('#error-services').html('');
                        }

                        if (data.error.subject) {
                            $('#error-subject').css('color', 'red').html(data.error.subject[0]);
                        } else {
                            $('#error-subject').html('');
                        }

                        if (data.error.organization) {
                            $('#error-organization').css('color', 'red').html(data.error.organization[0]);
                        } else {
                            $('#error-organization').html('');
                        }

                    }
                }
            });

        }

    });




    {{--$('#form-submit').on('click',function (e) {--}}

        {{--e.preventDefault();--}}

        {{--var name = $("#name").val();--}}
        {{--var organization = $("#organization").val();--}}
        {{--var phone_number = $("#phone_number").val();--}}
        {{--var email = $("#email").val();--}}
        {{--var services = $("#services").val();--}}
        {{--var subject = $("#subject").val();--}}
        {{--var message = $("#message").val();--}}


        {{--if(grecaptcha.getResponse() == "") {--}}
            {{--alert('Recaptcha validaiton failed!');--}}
        {{--}else {--}}

            {{--$.ajax({--}}
                {{--type: 'POST',--}}
                {{--url: "{{ route('services') }}",--}}
                {{--data: {--}}
                    {{--name: name,--}}
                    {{--email: email,--}}
                    {{--phone_number: phone_number,--}}
                    {{--message: message,--}}
                    {{--services: services,--}}
                    {{--subject: subject,--}}
                    {{--organization: organization,--}}
                    {{--"_token": "{{ csrf_token() }}"--}}
                {{--},--}}
                {{--success: function (data) {--}}
                    {{--if ($.isEmptyObject(data.error)) {--}}
                        {{--window.location.replace("/thank-you");--}}
                    {{--} else {--}}
                        {{--console.log(data);--}}

                        {{--if (data.error.message) {--}}
                            {{--$('#error-message').css('color', 'red').html(data.error.message[0]);--}}
                        {{--} else {--}}
                            {{--$('#error-message').html('');--}}
                        {{--}--}}
                        {{--if (data.error.phone_number) {--}}
                            {{--$('#error-phone_number').css('color', 'red').html(data.error.phone_number[0]);--}}
                        {{--} else {--}}
                            {{--$('#error-phone_number').html('');--}}
                        {{--}--}}

                        {{--if (data.error.email) {--}}
                            {{--$('#error-email').css('color', 'red').html(data.error.email[0]);--}}
                        {{--} else {--}}
                            {{--$('#error-email').html('');--}}
                        {{--}--}}

                        {{--if (data.error.name) {--}}
                            {{--$('#error-name').css('color', 'red').html(data.error.name[0]);--}}
                        {{--} else {--}}
                            {{--$('#error-name').html('');--}}
                        {{--}--}}

                        {{--if (data.error.services) {--}}
                            {{--$('#error-services').css('color', 'red').html(data.error.services[0]);--}}
                        {{--} else {--}}
                            {{--$('#error-services').html('');--}}
                        {{--}--}}

                        {{--if (data.error.subject) {--}}
                            {{--$('#error-subject').css('color', 'red').html(data.error.subject[0]);--}}
                        {{--} else {--}}
                            {{--$('#error-subject').html('');--}}
                        {{--}--}}

                        {{--if (data.error.organization) {--}}
                            {{--$('#error-organization').css('color', 'red').html(data.error.organization[0]);--}}
                        {{--} else {--}}
                            {{--$('#error-organization').html('');--}}
                        {{--}--}}

                    {{--}--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}

    {{--});--}}



</script>




@endsection
