@extends('layout.app')


@section('style')

    <link rel="stylesheet" href="/css/select.css">

    <style>
        @media (min-width: 1440px) {
           .homecon .container {
                max-width: 1140px;
            }

            .carousel-captions{
                bottom: 31%;
            }
        }
    </style>

@endsection

@section('content')


    <div class="homecon">
        <!--Top Banner-->

    @include('section.home_top_banner')

    <!--Top Banner-->



        <section class="con-marquee">
            <span> <a href="/white-paper/compendium-edition-ix"><strong>New:</strong> Compendium Edition IX</a> |  <a href="https://blog.netrika.com/combating-the-battle-against-counterfeit-medicines-a-newsletter/"> Combating The Battle Against Counterfeit Medicines VII - A Newsletter</a> | <a href="https://blog.netrika.com/anti-bribery-and-corruption-a-newsletter/">Anti- Bribery And Corruption - A Newsletter</a></span>

        </section>


        <section class="industries" id="industries">
            <div class="container">

                <div class="custom_heading">
                    <h2 style="text-align: center;color: #ffffff;" class="custom-title adl-2">Our Service Offerings</h2>
                    {{--<p></p>--}}
                </div>
                <div class="row">

                    <div style="padding: 0px;" class="col-md-12">

                        <ul class="industries-box">

                            @if(isset($data['get_cat_data']))

                                @foreach($data['get_cat_data'] as $key=>$get_cat_data)

                                    <li>
                                        <div class="s-box">
                                            <div>
                                                <div class="image">
                                                    <img src="{{asset('/img/services/'.$get_cat_data->cat_thumbnail)}}" alt="Forensic Investigation">
                                                </div>
                                                <div class="info info-services">
                                                    <h4 class="no_stripe">
                                                        {{$get_cat_data->name}}
                                                    </h4>
                                                    <p>{{\Illuminate\Support\Str::limit($get_cat_data->short_description,150)}}<a class="read_more" href="/services/{{$get_cat_data->slug}}/{{$get_cat_data->slug}}"><br><br>
                                                            <span>read more</span>&nbsp;<i class=" fa fa-chevron-right stm_icon"></i><br>
                                                        </a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                @endforeach

                            @endif

                            <li>
                                <div class="s-box">
                                    <div class="image">
                                        <img src="/img/services/gdpr-compliance.jpg" alt="Netrika - GDPR Compliance" alt="Netrika - GDPR Compliance">
                                    </div>

                                    <div class="info info-services">
                                        <h4 class="no_stripe">
                                            GDPR Compliance
                                        </h4>
                                        <p>{{\Illuminate\Support\Str::limit("The GDPR provides certain rights for individuals: the right to be informed, the right of access, the right to rectification, the right to erasure..",150)}}


                                            <a class="read_more" href="/services/information-security/gdpr-compliance"><br><br>
                                                <span>read more</span>&nbsp;<i class=" fa fa-chevron-right stm_icon"></i><br>
                                            </a>
                                        </p>
                                    </div>

                                </div>
                            </li>

                        </ul>
                        {{--<div style="margin-top: 0rem;" class="button-box">--}}
                        {{--<a class="custom-all-btn" href="/industries">View All <i class=" fa fa-chevron-right stm_icon"></i></a>--}}
                        {{--</div>--}}
                    </div>

                </div>  <!--container ends here-->
            </div></section>

        <section class="services" id="services">
            <div class="container">

                <div class="custom_heading">
                    <h2 style="text-align: center" class="custom-title    adl-2
">Industries</h2>
                    <p></p>
                </div>


                <div class="row secblkone">

                    <div class="col-md-3 text-center how-do-we-box   zoomIn adl-2">
                        <div class="custom_heading">
                            <h5 style="text-align: center;font-weight:700" class="how-custom-title">What Sets Us Apart</h5>

                            <div class="kkb">
                                <p class="hnc"></p>
                            </div>
                        </div>
                        <div class="how-do-we slider">
                            <div>
                                <img src="{{asset('/img/how-we-do/Consultancy.png')}}">
                                <div class="info">
                                    <h4 class="no_stripe">
                                        Premium Management Consultancy </h4>
                                    <p>We focus not only on de-risking our client’s businesses but equally on sustaining it.</p>
                                </div>
                            </div>
                            <div>
                                <img src="{{asset('/img/how-we-do/Result.png')}}">
                                <div class="info">
                                    <h4 class="no_stripe">
                                        Result-based culture </h4>
                                    <p>We have a multi-disciplinary team to handle complex threats to businesses efficiently and within defined framework.</p>
                                </div>
                            </div>
                            <div>
                                <img src="{{asset('/img/how-we-do/Service-line-client.png')}}">
                                <div class="info">
                                    <h4 class="no_stripe">
                                        360 degree risk consulting solutions</h4>
                                    <p>With wide range of services we help businesses capitalize on new opportunities & enhance performance.</p>
                                </div>
                            </div>
                            <div>
                                <img src="{{asset('/img/how-we-do/Command-over-industry.png')}}">
                                <div class="info">
                                    <h4 class="no_stripe">
                                        Command over the Industry </h4>
                                    <p>With 100 plus years of cumulative experience, our leaders are committed to provide risk solutions to toughest challenges.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9 home-service-box   zoomIn adl-3">
                        <div class="services-off slider">

                            <div>
                                <div class="image">
                                    <img src="{{asset('/img/industries/banking.jpg')}}" alt="Netrika Services for Banking Industries">
                                </div>
                                <div class="info">
                                    <h4 class="no_stripe">
                                        Banking
                                    </h4>
                                </div>
                            </div>

                            <div>
                                <div class="image">
                                    <img src="{{asset('/img/industries/logistics.jpg')}}" alt="Netrika Services for Logistics Industries">
                                </div>
                                <div class="info">
                                    <h4 class="no_stripe">
                                        Logistics & Supply
                                    </h4>
                                </div>
                            </div>

                            {{--<div>--}}
                            {{--<div class="image">--}}
                            {{--<img src="/img/industries/investment.jpg">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                            {{--<h4 class="no_stripe">--}}
                            {{--Investment--}}
                            {{--</h4>--}}

                            {{--</div>--}}
                            {{--</div>--}}

                            <div>
                                <div class="image">
                                    <img src="{{asset('/img/industries/legal.jpg')}}" alt="Netrika Services for Legal Industries">
                                </div>
                                <div class="info">
                                    <h4 class="no_stripe">
                                        Legal
                                    </h4>
                                </div>
                            </div>

                            <div>
                                <div class="image">
                                    <img src="{{asset('/img/industries/real-estate.jpg')}}" alt="Netrika Services for Real Estate Industries">
                                </div>

                                <div class="info">
                                    <h4 class="no_stripe">
                                        Real Estate
                                    </h4>

                                </div>
                            </div>
                            <div>
                                <div class="image">
                                    <img src="{{asset('/img/industries/financial-services.jpg')}}" alt="Netrika Services for Financial Industries">
                                </div>
                                <div class="info">
                                    <h4 class="no_stripe">
                                        Financial
                                    </h4>
                                </div>
                            </div>
                            <div>
                                <div class="image">
                                    <img src="{{asset('/img/industries/fmcg.jpg')}}" alt="Netrika Services for FMCG Industries">
                                </div>
                                <div class="info">
                                    <h4 class="no_stripe">
                                        FMCG
                                    </h4>
                                </div>
                            </div>

                        </div>
                        <div style="margin-top: 0rem;" class="button-box bb">
                            <a class="custom-all-btn" href="/industries">View All <i class=" fa fa-chevron-right stm_icon"></i></a>
                        </div>
                    </div>
                </div>  <!--row ends here-->
                <!-- <div style="margin-top: 0rem;" class="button-box bb">
                     <a class="custom-all-btn" href="/industries">View All <i class=" fa fa-chevron-right stm_icon"></i></a>
                 </div>-->
             </div>  <!--container ends here-->
        </section>



        <section class="key-expert" id="key-expert">
            <div class="container">

                <div class="custom_heading">
                    <h2 style="text-align: center" class="custom-title    adl-2">Key Experts</h2>
                    <p></p>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="wpb_wrapper">
                            <div class="p-box">
                                <div class="mainbox   zoomIn adl-1">
                                    <div class="cards">

                                        <div class="img-box">
                                            <img src="{{asset('/img/team/sanjay-kaushik.jpg')}}" alt="Sanjay Kaushik">
                                        </div>

                                        <div class="info">
                                            <span><b>Sanjay Kaushik</b></span>
                                            <p>Managing Director</p>
                                            <p>CFE, CATS, CCPS, CFAP, FCIISCM
                                            </p>
                                            <p>Gurgaon</p>
                                        </div>
                                    </div>
                                    <div class="footer-box">
                                        <span class="mob"><i class="fa fa-phone" aria-hidden="true"></i>+91 124 488 3001</span>
                                        <a href="mailto:sanjay@netrika.in">    <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                        <a href="/team-profile/sanjay-kaushik_p.pdf">  <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                                <div class="mainbox   zoomIn adl-2
">
                                    <div class="cards">

                                        <div class="img-box">
                                            <img src="{{asset('img/team/aashish-taneja.jpg')}}" alt="Aashish Taneja">
                                        </div>

                                        <div class="info">
                                            <span><b>Aashish Taneja</b></span>
                                            <p>Co - Founder &amp; Director
                                                Background Checks
                                            </p>

                                            <p>Gurgaon</p>
                                        </div>
                                    </div>
                                    <div class="footer-box">
                                        <span class="mob"><i class="fa fa-phone" aria-hidden="true"></i></i>+91 124 488 3033</span>
                                        <a href="mailto:aashish@netrika.in">   <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                        <a href="/team-profile/aashish-taneja.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                                <div class="mainbox   zoomIn adl-3
">
                                    <div class="cards">

                                        <div class="img-box">
                                            <img src="{{asset('/img/team/Dhruv.jpg')}}" alt="Dhruv Maingi">
                                        </div>

                                        <div class="info">
                                            <span><b>Dhruv Maingi</b></span>
                                            <p> Co - Founder &amp;
                                                Director - IPR <br>
                                            </p>
                                            <p>ICPS</p>
                                            <p>Gurgaon</p>
                                        </div>
                                    </div>
                                    <div class="footer-box">
                                        <span class="mob"><i class="fa fa-phone" aria-hidden="true"></i></i>+91 124 488 3003 </span>
                                        <a href="mailto:dhruv@netrika.in">     <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                        <a href="/team-profile/dhruv-maingi.pdf">     <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                    </div>
                                </div>




                            </div>

                            <div class="wpb_wrapper">
                                <div class="p-box">
                                    <div class="mainbox   zoomIn adl-1">
                                        <div class="cards">

                                            <div class="img-box">
                                                <img src="{{asset('/img/team/page/col-sanganagouda-dhawalgi.jpg')}}" alt="Col Sanganagouda Dhawalgi">
                                            </div>

                                            <div class="info">
                                                <span><b>Col Sanganagouda Dhawalgi</b></span>
                                                <p>Executive Director-FI</p>
                                                <p>CFE
                                                </p>
                                                <p>Gurgaon</p>
                                            </div>
                                        </div>
                                        <div class="footer-box">
                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true"></i>+91-974-223-3717</span>
                                            <a href="mailto:sanganagouda.dhawalgi@netrika.com">    <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                            <a href="/team-profile/Col Sanganagouda Dhawalgi.pdf">  <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mainbox   zoomIn adl-2
">
                                        <div class="cards">

                                            <div class="img-box">
                                                <img src="{{asset('img/team/page/rajesh-kumar.jpg')}}" alt="Rajesh Kumar">
                                            </div>

                                            <div class="info">
                                                <span><b>Rajesh Kumar</b></span>
                                                <p>Director-Cyber Security
                                                </p>

                                                <p>Gurgaon</p>
                                            </div>
                                        </div>
                                        <div class="footer-box">
                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true"></i></i>+91-124-488-3002</span>
                                            <a href="mailto:rajesh.kumar@netrika.com">   <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                            <a href="/team-profile/rajesh-kumar.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mainbox   zoomIn adl-3
">
                                        <div class="cards">

                                            <div class="img-box">
                                                <img src="{{asset('/img/team/page/kartik-vig.jpg')}}" alt="Kartik Vig">
                                            </div>

                                            <div class="info">
                                                <span><b>Kartik Vig</b></span>
                                                <p> Director - Security Consulting <br>
                                                </p>

                                                <p>Gurgaon</p>
                                            </div>
                                        </div>
                                        <div class="footer-box">
                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true"></i></i>+91-124-488-3034</span>
                                            <a href="mailto:kartik.vig@netrika.com">     <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                            <a href="/team-profile/kartik-vig.pdf">     <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>




                                </div>
                        </div>
                        <div class="button-box">
                            <a class="custom-all-btn" href="/team">View All <i class=" fa fa-chevron-right stm_icon"></i></a>
                        </div>
                    </div>

                </div>  <!--container ends here-->
            </div></section>
        <section class="know-us-news" id="know-us-news">
            <div class="container">


                <div class="row">

                    <div class="col-md-6">
                        <div class="custom_heading_second">
                            <h2 style="text-align: left" class="custom-title    adl-2">Know Us Better</h2>
                        </div>

                        <div class="video-wrapper">
                            <video width="100px" src="/video/net-video.mp4" poster="/img/Video-thumbnail.jpg"></video>
                        </div>
                    </div>


                    <!--Newsboard-->

                @include('section.home_news_board')

                <!--Newsboard-->


                </div>  <!--container ends here-->
            </div></section>
        <section class="affiliations" id="affiliations">
            <div class="container">

                <div class="custom_heading">
                    <h2 style="text-align: center" class="custom-title    adl-2">Accreditations & Affiliations</h2>
                    <p></p>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="affiliations-client slider">
                            <div>
                                <img src="{{asset('img/clients/client1.png')}}" alt="Forensic Interview Solutions">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/pbsa.jpg')}}" alt="PBSA">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client3.jpg')}}" alt="ASIRS">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client4.png')}}" alt="NASSCOM">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client5.png')}}" alt="SECONA">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client6.png')}}" alt="CERTIN EMPANLLED">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client7.png')}}" alt="CII">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client9.png')}}" alt="Global E2C">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client10.png')}}" alt="Association of Certified Fraud Examiners">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client11.png')}}" alt="ASIS International">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/client12.png')}}" alt="International Trademark Association">
                            </div>

                            <div>
                                <img src="{{asset('img/clients/shrm.jpg')}}" alt="SHRM">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/apdi.jpg')}}" alt="APDI">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/acacap.jpg')}}" alt="ACACAP">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/acpi.jpg')}}" alt="ACPI">
                            </div>
                            <div>
                                <img src="{{asset('img/clients/iod.jpg')}}" alt="Institue of Directors">
                            </div>
                            <div>
                                <img style="width: 55%;" src="{{asset('img/clients/award-1.png')}}" alt="Entreprenuer of the Year Award 2020">
                            </div>
                            <div>
                                <img style="width: 55%;" src="{{asset('img/clients/award-2.png')}}" alt="Business Protection Award 2019">
                            </div>
                            <div>
                                <img style="width: 55%;" src="{{asset('img/clients/award-3.png')}}" alt="Cobra Award 2019">
                            </div>
                            <div>
                                <img style="width: 55%;" src="{{asset('img/clients/award-4.png')}}" alt="Business Sphere Award 2018">
                            </div>
                            <div>
                                <img style="width: 55%;" src="{{asset('img/clients/award-5.png')}}" alt="Fraud Investigator of the Year Award">
                            </div>
                            <div>
                                <img style="width: 55%;" src="{{asset('img/clients/award-6.png')}}" alt="Award for Outstanding Contribution in Risk Management">
                            </div>
                            <div>
                                <img style="width: 55%;" src="{{asset('img/clients/award-7.png')}}" alt="Security Project Design of the Year">
                            </div>

                        </div>
                    </div> 

                </div>  <!--container ends here-->
            </div></section>
        <section class="faqs-testimonial" id="faqs-testimonial">
            <div class="container">


                <div class="row ">

                    <div class="col-md-4   zoomIn adl-2">
                        <div class="custom_heading_second">
                            <h2 style="text-align: center;" class="custom-title    adl-2">FAQs</h2>

                        </div>
                        <div>
                            <div id="accordion" class="accordion">
                                <div class="card mb-0">
                                    <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                        <a class="card-title">
                                            <p class="faqt">How Netrika can help me?</p>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                                        <p>Netrika Consulting India Private Limited, is a professional risk and integrity management company that operates in emerging and frontier markets to advise clients on operational or business risk. For more details<br><a class="ch" href="/who-we-are"> click here</a></p>
                                    </div>
                                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        <a class="card-title"><p class="faqt">Do you provide trainings?</p></a>
                                    </div>
                                    <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                                        <p>Yes we do, for more details <br> <a class="ch" href="https://training.netrika.com/">click here</a></p>
                                    </div>
                                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        <a class="card-title"><p class="faqt">Do you provide GDPR service?</p></a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">Yes we do, for more details <br><a class="ch" href="/services/information-security/gdpr-compliance">click here</a></div>
                                    </div>
                                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        <a class="card-title"><p class="faqt">Do you have International presence?</p></a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">Yes we do, please find the contact detail <br><a class="ch" href="/contact-us">click here</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4   zoomIn adl-2">
                        <div class="custom_heading_second">
                            <h2 style="text-align: center;" class="custom-title    adl-2">Upcoming Events</h2>

                        </div>

                        <div class="news-event slider">


                            @if(isset($data['get_upcoming_event']))


                                @foreach($data['get_upcoming_event'] as $key=>$get_upcoming_event)

                                    <div>
                                        <div class="post_inner">
                                            <div class="image">
                                                <a href="/upcoming-event">
                                                    <img src="{{asset('/img/events/'.$get_upcoming_event->image)}}" alt="Events" width="350" height="250">                                            </a>
                                            </div>
                                            <div class="post-block ue">
                                                <h5 class="no_stripe"><a href="/upcoming-event">{{$get_upcoming_event->title}}</a>
                                                </h5>

                                                <div class="post-blog-info">
                                                    <p>
                                                        {{$get_upcoming_event->city}}
                                                    </p>
                                                    <p>
                                                        {{$get_upcoming_event->event_date}}
                                                    </p>
                                                </div>
                                                <div class="date">
                                                    {{--<span  class="the_date">15th - 18th June 2020</span>--}}


                                                    <a href="/upcoming-event" class="button blog-btn">View All</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                @endforeach


                            @endif

                            {{--<div>--}}
                            {{--<div class="post_inner">--}}
                            {{--<div class="image">--}}
                            {{--<a href="#">--}}
                            {{--<img src="/img/events/cfe-Bengaluru.jpg" alt="" width="350" height="250">                                            </a>--}}
                            {{--</div>--}}
                            {{--<div class="post-block ue">--}}
                            {{--<h5 class="no_stripe"><a href="#">CFE (Certified Fraud Examiner) Exam Review Course</a>--}}
                            {{--</h5>--}}

                            {{--<div class="post-blog-info">--}}
                            {{--<p>--}}
                            {{--Bengaluru--}}
                            {{--</p>--}}
                            {{--<p>--}}
                            {{--22nd - 25th June, 2020--}}
                            {{--</p>--}}
                            {{--</div>--}}
                            {{--<div class="date">--}}
                            {{--<span  class="the_date">15th - 18th June 2020</span>--}}


                            {{--<a href="/upcoming-event" class="button blog-btn">View All</a>--}}
                            {{--</div>--}}
                            {{--</div>--}}


                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <!--testimonail-->

                @include('section.home_testimonial')

                <!--testimonail-->


                </div>  <!--container ends here-->
            </div>
        </section>
        <section class="insights-case" id="insights-case">
            <div class="container">

                <div class="row">

                    <div class="col-md-4   zoomIn adl-1">
                        <div class="custom_heading_second">
                            <h2 class="custom-title    adl-2">Blog Post</h2>

                        </div>

                        <div class="post_inner">
                            <div class="image">
                                <a href="https://blog.netrika.com/">
                                    <img src="{{asset('/img/case-studies/News-&-Events-300x250.jpg')}}" alt="Corporate Investigation Services in India" width="350" height="250">                                            </a>
                            </div>
                            <div class="post-block">
                                <h5 class="no_stripe"><a href="https://blog.netrika.com/corporate-investigation-services-in-india/">Corporate Investigation Services in India
                                    </a>
                                </h5>

                                <div class="post-blog-info">
                                    <p>{{\Illuminate\Support\Str::limit("These days none can be trusted upon and in corporate sectors, where every corporate entity is trying hard to sideline all its rivals and competitors, one has to keep all its senses on high alert all the time.",160)}}</p>
                                </div>
                                <div class="date">
                                    {{--<span class="the_date">May 1, 2020</span>--}}
                                    <a href="https://blog.netrika.com/" class="button blog-btn">View All</a>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-md-4   zoomIn adl-2">
                        <div class="custom_heading_second">
                            <h2 class="custom-title    adl-2">Casebook</h2>

                        </div>
                        {{--$data['get_casebook'] = $get_casebook;--}}
                        {{--$data['get_white_paper'] = $get_white_paper;--}}

                        @if(isset($data['get_casebook']))


                            @foreach($data['get_casebook'] as $key=>$get_casebook)

                                {{--                            {{dd($get_casebook)}}--}}

                                <div class="post_inner">
                                    <div class="image">
                                        <a href="/casebook/{{$get_casebook->slug}}">
                                            <img src="{{asset('/img/case-studies/'.$get_casebook->thumbnail)}}"  alt="case-studies" width="350" height="250">                                            </a>
                                    </div>
                                    <div class="post-block">
                                        <h5 class="no_stripe"><a href="/casebook/{{$get_casebook->slug}}">{{$get_casebook->title}}</a>
                                        </h5>

                                        <div class="post-blog-info">
                                            <p>
                                                {{\Illuminate\Support\Str::limit($get_casebook->short_des_main,160)}}
                                            </p>
                                        </div>
                                        <div class="date">
                                            {{--<span class="the_date">May 1, 2020</span>--}}
                                            <a href="/casebook" class="button blog-btn">View All</a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        @endif


                    </div>

                    <div class="col-md-4   zoomIn adl-2">
                        <div class="custom_heading_second">
                            <h2 class="custom-title    adl-2">Whitepaper and surveys</h2>

                        </div>


                        @if(isset($data['get_white_paper']))


                            @foreach($data['get_white_paper'] as $key=>$get_white_paper)

                                <div class="post_inner">
                                    <div class="image">
                                        <a href="/white-paper/{{$get_white_paper->slug}}">
                                            <img src="{{asset('/img/white-paper/'.$get_white_paper->image)}}"  alt="White Collar" width="350" height="250">                                            </a>
                                    </div>
                                    <div class="post-block">
                                        <h5 class="no_stripe"><a href="/white-paper/{{$get_white_paper->slug}}">{{$get_white_paper->title}}</a>
                                        </h5>

                                        <div class="post-blog-info">
                                            <p>
                                                Our experts give you a comprehensive and detailed understanding in this Whitepaper and survey which has been prepared after a thorough research.
                                                <a href="/white-paper/{{$get_white_paper->slug}}">Download now!</a>

                                            </p>
                                        </div>
                                        <div class="date">
                                            {{--<span  class="the_date">15th - 18th June 2020</span>--}}


                                            <a href="/white-paper" class="button blog-btn">View All</a>
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
    </section>


    <section>


        <div id="map_5eb89c99ddded" class="stm_gmap_wrapper stm_gmap_wrapper_l14">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="vc_custom_heading">
                            <h2 class="custom-title    adl-2">Find an Office Near You</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="addresses">

                            <div class="single-loc" data-country="INDIA" data-title="Accord Classic 510, <br> Above Anupam Stationery, <br> Arey Road, Goregaon East, <br> Mumbai, Maharashtra 400063" data-lat="19.166220" data-lng="72.857300"></div>

                            <div class="single-loc" data-country="INDIA" data-title="Unit No 205A, <br> Carlton Towers, <br>  01 Old Airport Road, <br> Bengaluru 560008" data-lat="12.961080" data-lng="76.638070"></div>

                            <div class="single-loc" data-country="INDIA" data-title="Plot No.2, Industrial Estate, <br> Udyog Vihar, Phase IV,<br> Gurugram 122015, Haryana, India" data-lat="28.508190" data-lng="77.081630"></div>
                            <div class="single-loc" data-country="INDIA" data-title="Kolkata" data-lat="22.470260" data-lng="88.369820"></div>
                            <div class="single-loc" data-country="INDIA" data-title="Hyderabad" data-lat="17.461695" data-lng="78.622224"></div>
                            <div class="single-loc" data-country="INDIA" data-title="Chennai" data-lat="12.987690" data-lng="80.176407"></div>
                            <div class="single-loc" data-country="International" data-title="SAIF ZONE , Q1-06-141/C <br>
PO Box 124932 <br> Sharjah Airport Free Zone" data-lat="25.456397" data-lng="55.495949"></div>

                            <div class="single-loc" data-country="International" data-title="Regus Vision Exchange <br>
2 Venture Drive <br>
Level #24-01 - #24-32 <br>
Singapore 608526" data-lat="1.849650" data-lng="103.707710"></div>

                            <div class="single-loc" data-country="International" data-title="32 Uswatte Road, <br>
EtulKotte,Kotte, <br>
Sri Lanka" data-lat="8.302780" data-lng="79.908333"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 stm_select_country_unit">
                                    <select class="stm_select_country">
                                        <option value="">Select a country&hellip;</option>
                                        <option value="INDIA">India</option>
                                        <option value="International">International</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 stm_select_office_unit">
                                    <select class="stm_select_office">
                                        <option value="">Select an office&hellip;</option>
                                        <option data-country="INDIA" value="1">Bengaluru</option>
                                        <option data-country="INDIA" value="4">Chennai</option>
                                        <option data-country="INDIA" value="5">Delhi</option>
                                        <option data-country="INDIA" value="3">Hyderabad</option>
                                        <option data-country="INDIA" value="0">Mumbai</option>
                                        <option data-country="INDIA" value="2">Kolkata</option>
                                        <option data-country="International" value="1">Singapore</option>
                                        <option data-country="International" value="2">Sri Lanka</option>
                                        <option data-country="International" value="0">UAE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 680px;" id="stm-gmap-5eb89c99dddec" class="stm_gmap"></div>
        </div>


    </section>




    <section class="cta" id="cta">
        <div class="container">
            <div class="row">

                <div class="col-md-12 cta-box">
                    <div class="cta-content">
                        <h3 class="cta-title   scrollanimation adl-2">Looking for top of the line business expertise and advisory?</h3>
                    </div>
                    <div class="cta-action">
                        <a href="/contact-us"  class="custom-all-btn cta-btn" data-toggle="modal" data-target="#exampleModalCenterss">
                            <span>Quick Enquiry</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>



    </div>

@endsection


@section('script')


<script type="text/javascript">

    var stm_markers_filter = [{"0":"stm_gmap_address_l14","title":"Mumbai","country":"INDIA","lat":"19.166220","lng":"72.857300"},{"0":"stm_gmap_address_l14","title":"Bengaluru","country":"INDIA","lat":"12.961080","lng":"77.638070"},{"0":"stm_gmap_address_l14","title":"Kolkata","country":"INDIA","lat":"22.470260","lng":"88.369820"},
    {"0":"stm_gmap_address_l14","title":"Hyderabad","country":"INDIA","lat":"17.461695","lng":"78.622224"},
    {"0":"stm_gmap_address_l14","title":"Chennai","country":"INDIA","lat":"12.987690","lng":"80.176407"},{"0":"stm_gmap_address_l14","title":"UAE","country":"International","lat":"25.326397","lng":"55.495949"},{"0":"stm_gmap_address_l14","title":"Singapore","country":"International","lat":"1.349650","lng":"103.707710"},{"0":"stm_gmap_address_l14","title":"Sri Lanka","country":"International","lat":"6.902780","lng":"79.908333"},{"0":"stm_gmap_address_l14","title":"Delhi","country":"INDIA","lat":"28.4918436","lng":"77.0791266"}];

</script>



<script type="text/javascript">
jQuery(document).ready(function ($) {
var stm_markers = [];
$.each(stm_markers_filter, function(index, value){
if(typeof(value) == 'object') {
if(typeof(value.country) !== 'undefined' && typeof(stm_markers[value.country]) === 'undefined') {
stm_markers[value.country] = [];
}
if(typeof(value.lng) !== 'undefined' && typeof(value.title) !== 'undefined' && typeof(value.lat) !== 'undefined') {
stm_markers[value.country].push({
'title': value.title,
'lat': value.lat,
'lng': value.lng
});
}
}
});

google.maps.event.addDomListener(window, 'load', init);
var map_5eb89c99ddded, markers = [], gmarkers = [], default_marker_icon = '/img/map-marker.png';
function init() {

var mapStyles = [
{
"featureType": "administrative",
"elementType": "labels.text.fill",
"stylers": [
{
"color": "#444444"
}
]
},
{
"featureType": "landscape",
"elementType": "all",
"stylers": [
{
"color": "#f2f2f2"
}
]
},
{
"featureType": "poi",
"elementType": "all",
"stylers": [
{
"visibility": "off"
}
]
},
{
"featureType": "road",
"elementType": "all",
"stylers": [
{
"saturation": -100
},
{
"lightness": 45
}
]
},
{
"featureType": "road.highway",
"elementType": "all",
"stylers": [
{
"visibility": "simplified"
}
]
},
{
"featureType": "road.arterial",
"elementType": "labels.icon",
"stylers": [
{
"visibility": "off"
}
]
},
{
"featureType": "transit",
"elementType": "all",
"stylers": [
{
"visibility": "off"
}
]
},
{
"featureType": "water",
"elementType": "all",
"stylers": [
{
"color": "#6c98e1"
},
{
"visibility": "on"
}
]
}
];

mapStyles = [
{
"featureType": "water",
"elementType": "geometry",
"stylers": [
{
"color": "#e9e9e9"
},
{
"lightness": 17
}
]
},
{
"featureType": "landscape",
"elementType": "geometry",
"stylers": [
{
"color": "#f5f5f5"
},
{
"lightness": 20
}
]
},
{
"featureType": "road.highway",
"elementType": "geometry.fill",
"stylers": [
{
"color": "#ffffff"
},
{
"lightness": 17
}
]
},
{
"featureType": "road.highway",
"elementType": "geometry.stroke",
"stylers": [
{
"color": "#ffffff"
},
{
"lightness": 29
},
{
"weight": 0.2
}
]
},
{
"featureType": "road.arterial",
"elementType": "geometry",
"stylers": [
{
"color": "#ffffff"
},
{
"lightness": 18
}
]
},
{
"featureType": "road.local",
"elementType": "geometry",
"stylers": [
{
"color": "#ffffff"
},
{
"lightness": 16
}
]
},
{
"featureType": "poi",
"elementType": "geometry",
"stylers": [
{
"color": "#f5f5f5"
},
{
"lightness": 21
}
]
},
{
"featureType": "poi.park",
"elementType": "geometry",
"stylers": [
{
"color": "#dedede"
},
{
"lightness": 21
}
]
},
{
"elementType": "labels.text.stroke",
"stylers": [
{
"visibility": "on"
},
{
"color": "#ffffff"
},
{
"lightness": 16
}
]
},
{
"elementType": "labels.text.fill",
"stylers": [
{
"saturation": 36
},
{
"color": "#333333"
},
{
"lightness": 40
}
]
},
{
"elementType": "labels.icon",
"stylers": [
{
"visibility": "off"
}
]
},
{
"featureType": "transit",
"elementType": "geometry",
"stylers": [
{
"color": "#f2f2f2"
},
{
"lightness": 19
}
]
},
{
"featureType": "administrative",
"elementType": "geometry.fill",
"stylers": [
{
"color": "#fefefe"
},
{
"lightness": 20
}
]
},
{
"featureType": "administrative",
"elementType": "geometry.stroke",
"stylers": [
{
"color": "#fefefe"
},
{
"lightness": 17
},
{
"weight": 1.2
}
]
}
];

var mapOptions = {
zoom: 20,
streetViewControl: false,
scrollwheel: false,
styles: mapStyles
};
var mapElement = document.getElementById('stm-gmap-5eb89c99dddec');
map_5eb89c99ddded = new google.maps.Map(mapElement, mapOptions);
consulting_setMarkers();

}

$('#map_5eb89c99ddded select.stm_select_country').select2().on('change', function(){
var currentCountry = $(this).val();
$('select.stm_select_office option').each(function(){
$(this).removeAttr('disabled');
})
if(currentCountry !== '') {
$('select.stm_select_office option').each(function () {
var office_val = $(this).val();
var office_country = $(this).attr('data-country');
if (office_val !== '') {
if (currentCountry !== office_country) {
$(this).attr('disabled', 'disabled');
}
}
});
}
$('select.stm_select_office').select2({width: '100%', minimumResultsForSearch: '-1'});
$('select.stm_select_office').select2("val", "");
consulting_setMarkers();
});

$('#map_5eb89c99ddded select.stm_select_office').select2().on('change', function(){
consulting_setMarkers();
});

function consulting_setMarkers(){
var latlngbounds = new google.maps.LatLngBounds();
markers = [];

var $stm_select_country = $('.stm_select_country').val();
var $stm_select_office = $('.stm_select_office').val();

if($stm_select_country == '' && $stm_select_office == '') {
$('.single-loc').each(function(){
markers.push(
[
parseFloat($(this).data('lat')),
parseFloat($(this).data('lng')),
$(this).data('title')
]
);
});
} else if($stm_select_office !== '') {
var country = $('.stm_select_office').find(':selected').data('country');
var setPin = stm_markers[country][$stm_select_office];
markers.push(
[
parseFloat(setPin['lat']),
parseFloat(setPin['lng']),
setPin['title']
]
);
} else if($stm_select_country !== '') {
$('.single-loc[data-country="'+ $stm_select_country +'"]').each(function(){
markers.push(
[
parseFloat($(this).data('lat')),
parseFloat($(this).data('lng')),
$(this).data('title')
]
);
});
}

for (i = 0; i < gmarkers.length; i++) {
gmarkers[i].setMap(null);
}
for (var i = 0; i < markers.length; i++) {
var marker_array = markers[i];

marker = new google.maps.Marker({
position: {lat: marker_array[0], lng: marker_array[1]},
icon: default_marker_icon,
map: map_5eb89c99ddded,
title: ''
});

latlngbounds.extend(new google.maps.LatLng(marker_array[0], marker_array[1]));
gmarkers.push( marker );
addInfoWindow( marker, marker_array[2], marker_array[0] );
}
map_5eb89c99ddded.fitBounds(latlngbounds);

if( markers.length === 1 ) {
var listener = google.maps.event.addListener(map_5eb89c99ddded, "idle", function() {
map_5eb89c99ddded.setZoom(18);
google.maps.event.removeListener(listener);
});
}
}

function addInfoWindow(marker, title, lat) {

var infowindow = new google.maps.InfoWindow({
content: '<h6>' + title + '',
pixelOffset: new google.maps.Size(0,20)
});

google.maps.event.addListener(marker, 'mouseover', function (e) {
    // e.ya.target.removeAttribute('title');
    infowindow.open(map_5eb89c99ddded, marker);
$('[data-lat="'+ lat +'"]').addClass("focused");
});

google.maps.event.addListener(marker, 'mouseout', function () {
infowindow.close(map_5eb89c99ddded, marker);
$('[data-lat="'+ lat +'"]').removeClass("focused");
});

$(".item").on("mouseenter", function() {
if( parseFloat(marker.getPosition().lat()) === parseFloat($(this).data('lat')) ) {
infowindow.open(map_5eb89c99ddded, marker);
}
});

$(".item").on("mouseleave", function() {
if( parseFloat(marker.getPosition().lat()) === parseFloat($(this).data('lat')) ) {
infowindow.close(map_5eb89c99ddded, marker);
}
});
}


});
</script>



<script type="text/javascript" src="{{asset('/js/js-select2.min.js')}}"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0OLDkdxdEd5s0GRs8Ns7WbU6O1564IXg&amp;ver=1589157017"></script>

<script type="text/javascript">
$(".how-do-we").slick({
dots: false,
// prevArrow: false,
// nextArrow: false,
infinite: true,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 1,
slidesToScroll: 1
});
</script>
<script type="text/javascript">
$(".services-off").slick({
dots: false,
// prevArrow: false,
infinite: true,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 3,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
]
});


</script>
<script type="text/javascript">
$(".affiliations-client").slick({
dots: false,
infinite: true,
slidesToShow: 4,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 1,
infinite: true,
dots: false
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
]
});
</script>

<script type="text/javascript">

$(".testimonials").slick({
dots: false,
infinite: true,
slidesToShow: 1,
slidesToScroll: 1
});




// $(".dropdown").hover(
//     function () {
//         $('.dropdown-menu').addClass("show");
//     },
//     function () {
//         $('.dropdown-menu').removeClass("show");
//     }
// );


</script>
<script type="text/javascript">

    $(".news-event").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

</script>




@endsection