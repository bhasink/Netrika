@extends('layout.app')


@section('content')


    <div class="page_title">
        <div class="container">
            <div class="breadcrumbs">
                <span><a href="#">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Services</span></a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span>Forensic Investigations</span></a></span>
                <span><i class="fa fa-angle-right"></i></span><span>
            <span>Forensic Investigations</span></span>
            </div>
        </div>
    </div>


    <section class="services-page" id="services-page" style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-9 service-box-img">
                    <div class="service-box-img">
                        <img src="/img/ services/Forensic-Investigation.jpg" alt="">
                    </div>


                    <div class="services-content-box">

                        <div class="custom_heading">
                            <h2 style="text-align: center;" class="custom-title">{{$data['get_service_data']->structure_four_title}}</h2>
                        </div>

                        <div class="cardst">

                            @if(isset($data['get_flip_style']))

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

                            @endif




                        </div>

                    </div>


                    {{--<div class="services-content-box">--}}
                    {{--<div class="cardst">--}}
                    {{--<div class="col-1-of-3">--}}
                    {{--<div class="acards">--}}
                    {{--<div class="card__side1 card__side--front">--}}
                    {{--<div class="card__picture1 card__picture--1">--}}

                    {{--</div>--}}
                    {{--<h4 class="card__heading">--}}
                    {{--<span class="card__heading-span card__heading-span--1">GDPR Compliance</span>--}}

                    {{--</h4>--}}

                    {{--</div>--}}
                    {{--<div class="card__side card__side--back card__side--back-1">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-1-of-3">--}}
                    {{--<div class="acards">--}}
                    {{--<div class="card__side1 card__side--front">--}}
                    {{--<div class="card__picture1 card__picture--2">--}}

                    {{--</div>--}}
                    {{--<h4 class="card__heading">--}}
                    {{--<span class="card__heading-span card__heading-span--2">GDPR Compliance</span>--}}

                    {{--</h4>--}}

                    {{--</div>--}}
                    {{--<div class="card__side card__side--back card__side--back-2">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-1-of-3">--}}
                    {{--<div class="acards">--}}
                    {{--<div class="card__side1 card__side--front">--}}
                    {{--<div class="card__picture1 card__picture--2">--}}

                    {{--</div>--}}
                    {{--<h4 class="card__heading">--}}
                    {{--<span class="card__heading-span card__heading-span--2">GDPR Compliance</span>--}}

                    {{--</h4>--}}

                    {{--</div>--}}
                    {{--<div class="card__side card__side--back card__side--back-2">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    {{--</div>--}}

                    {{--</div>--}}


                    <div class="services-content-box">
                        <div class="custom_heading">
                            <h2 style="text-align: center;" class="custom-title">Key Expert</h2>
                        </div>
                        <div class="custom_sub_heading">
                            <h5 style="text-align: left;" class="custom-sub-title">DO EVERYTHING THE RIGHT WAY
                            </h5>
                        </div>
                        <div class="custom_text">

                            @if(isset($data['get_service_data']))


                                {!! $data['get_service_data']->main_content !!}

                            @endif


                        </div>
                    </div>




                    <div class="services-content-box">
                        <div class="custom_heading">
                            <h2 style="text-align: center;" class="custom-title">Key Expert</h2>
                        </div>
                        <div class="custom_sub_heading">
                            <h5 style="text-align: left;" class="custom-sub-title">DO EVERYTHING THE RIGHT WAY
                            </h5>
                        </div>
                        <div class="custom_text">
                            <p>
                                Due Diligence – may be for business partners, Senior hires, investors like by angel investors/venture capitalists/ institutional investors/ banks, etc who look for strategic investments, or who wish to acquire inorganic growth. The due diligence check is normally done to know the ethical behavior, financials, criminal background, court cases, media news, etc done through desktop searches through paid websites and publicly available information. In addition, site checks are carried out through market intelligence teams. Netrika Consulting India Pvt Ltd has experts who help customers in this domain with their expertise.
                            </p>
                        </div>
                        <div class="filp-boxs">
                            <div style="padding: 0px;" class="container">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                                <div class="flip-box-front">
                                                    <div class="flip-heading">
                                                        <h2>GDPR Compliance</h2>
                                                    </div>

                                                </div>
                                                <div class="flip-box-back">
                                                    <div class="flip-back-text">
                                                        <ul>
                                                            <li><span>Planning</span></li>
                                                            <li><span>Assessment</span></li>
                                                            <li><span>GAP Analysis</span></li>
                                                            <li><span>Policies, Data Privacy Impact Assessment</span></li>
                                                            <li><span>Guidance in implementing technical</span></li>
                                                            <li><span>Roadmap</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div class="col-md-6">
                                        <div class="flip-box">
                                            <div class="flip-box-inner">
                                                <div class="flip-box-front">
                                                    <div class="flip-heading">
                                                        <h2>GDPR Compliance</h2>
                                                    </div>

                                                </div>
                                                <div class="flip-box-back">
                                                    <div class="flip-back-text">
                                                        <ul>
                                                            <li><span>Planning</span></li>
                                                            <li><span>Assessment</span></li>
                                                            <li><span>GAP Analysis</span></li>
                                                            <li><span>Policies, Data Privacy Impact Assessment</span></li>
                                                            <li><span>Guidance in implementing technical</span></li>
                                                            <li><span>Roadmap</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
                                </div>
                            </div>
                        </div>
                        <div class="our-expert">
                            <div class="container">
                                <div class="custom_heading">
                                    <h2 style="text-align: center" class="custom-title">Our Expert</h2>
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

                                                                </div>
                                                            </div>
                                                            <div class="footer-box">
                                                                <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>{{$get_team->phone}}</span>
                                                                <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                                <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>

                                                    @endforeach

                                                @endif






                                            </div>


                                        </div>
                                    </div>

                                </div>  <!--container ends here-->
                            </div>
                        </div>
                        <div class="icon-services">
                            <div class="container">
                                <div class="custom_heading">
                                    <h2 style="text-align: center" class="custom-title">Our Approach</h2>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="icon-infobox">
                                            <div class="infobox-icon">
                                                <div class="infobox-icon-wrap">
                                                    <i class="fa fa-database" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="infobox-content">
                                                <h5>Risk Assessment</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon-infobox">
                                            <div class="infobox-icon">
                                                <div class="infobox-icon-wrap">
                                                    <i class="fa fa-database" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="infobox-content">
                                                <h5>Risk Assessment</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon-infobox">
                                            <div class="infobox-icon">
                                                <div class="infobox-icon-wrap">
                                                    <i class="fa fa-database" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="infobox-content">
                                                <h5>Risk Assessment</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon-infobox">
                                            <div class="infobox-icon">
                                                <div class="infobox-icon-wrap">
                                                    <i class="fa fa-database" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="infobox-content">
                                                <h5>Risk Assessment</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-sd">
                    <div class="service-box-sidebar">
                        <ul id="menu-sidebar" class="menu-sidebar">

                            @if(isset($data['get_related_service']))

                                @foreach($data['get_related_service'] as $key=>$get_related_service)

                                    <li class="sidebar-menu-item"><a href="/services/{{$data['get_service_cat']->slug.'/'.$get_related_service->slug}}">{{$get_related_service->name}}</a></li>

                                @endforeach

                            @endif

                        </ul>
                    </div>

                    <div class="sidebar-card">
                        <div class="sidebar-card-title">Contact us for a quote
                        </div>
                        <p><span>Contact us at the Netrika office nearest to you or submit a business inquiry online.</span></p>
                        <div class="sidebar-btn-box">
                            <a href="#" class="sidebar-btn">
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
                                        <div class="testimonialsidebar"><p>{{$get_quotes->quotes}}</p>
                                        </div>
                                        <div class="testimonialsidebar-info">
                                            <div class="testimonialsidebar-image"><img src="/img/team/quotes/{{$get_quotes->user_image}}" width="50" height="50"></div>
                                            <div class="testimonialsidebar-text">
                                                <div class="sidebarname">{{$get_quotes->name}}</div>
                                                <div class="sidebarcompany">
                                                    {{$get_quotes->designation}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            @endif

                        </div>
                    </div>
                    <div class="sidebar-casestudies-box">
                        <h6 class="sidebar-custom-title">Case Studies
                        </h6>
                        <div class="sidebar-cases slider">
                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#"><img src="/img/case-studies/sidebar-post.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#">Real Estate Ethics Concern Addressed</a></h5>
                                        <div class="sidebarpost-summary">Real Estate Ethics Concern Addressed The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then</div></div>
                                </div>
                            </div>
                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#"><img src="/img/case-studies/sidebar-post.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#">Real Estate Ethics Concern Addressed</a></h5>
                                        <div class="sidebarpost-summary">Real Estate Ethics Concern Addressed The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-casestudies-box">
                        <h6 class="sidebar-custom-title">Insights
                        </h6>
                        <div class="sidebar-cases slider">
                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#"><img src="/img/case-studies/sidebar-post.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#">Real Estate Ethics Concern Addressed</a></h5>
                                        <div class="sidebarpost-summary">Real Estate Ethics Concern Addressed The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then</div></div>
                                </div>
                            </div>
                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#"><img src="img/case-studies/sidebar-post.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#">Real Estate Ethics Concern Addressed</a></h5>
                                        <div class="sidebarpost-summary">Real Estate Ethics Concern Addressed The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then</div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="quick-enquiry" id="quick-enquiry">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="custom_sub_heading">
                        <h5 style="text-align: left;" class="custom-sub-title quick-enquiry-title">Quick Enquiry
                        </h5>
                    </div>
                    <form id="quick-enquiry-form" method="post" action="#" class="quick-enquiry-form">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="input-group">
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Name*">
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>
                                    <div class="input-group">
                                        <input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name">
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>
                                    <div class="input-group">
                                        <input id="organization" name="organization" type="text" class="form-control" placeholder="Organization Name">
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>
                                    <div class="input-group">
                                        <input id="phone_number" name="phone_number" type="number" class="form-control" placeholder="Phone Number*">
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>
                                    <div class="input-group">
                                        <input id="email" name="email" type="email" class="form-control" placeholder="Email*">
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select name="which year" id="which_year" class="form-control">
                                            <option value="0">Services</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>
                                    <div class="input-group">
                                        <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject">
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>
                                    <div class="input-group">
                                        <textarea name="message" cols="80" rows="5" class="form-control messagebox" placeholder="Your Message *"></textarea>
                                        <span class="error" style="display: none;">This field is required</span>
                                    </div>
                                    <div class="input-group">
                                        <button type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
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
        <div class="container">
            <div class="row">

                <div class="col-md-12 cta-box">
                    <div class="cta-content">
                        <h3 class="cta-title">Looking for top of the line business expertise and advisory?</h3>
                    </div>
                    <div class="cta-action">
                        <a href="#"  class="custom-all-btn cta-btn">
                            <span>GET A Quote</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>

                </div>
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
    </script>

@endsection
