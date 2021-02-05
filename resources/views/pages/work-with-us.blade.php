
@extends('layout.app')


@section('content')

    <style>

        .team-sd {
            padding: 0em 2.5em 0em 2.5em;
        }

        #videogallery-page {
            padding: 0em 1em 0em 1em;
        }

        .sidebarpost-title {
            margin: 15px 0 0;
            font-size: 14px;
            line-height: 20px;
        }
        .accordion {
            background-color: #fff;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border-bottom: 1px solid  #dadada;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
            border-top-width: 0px;
            border-left-width: 0px;
            border-right-width: 0px;
        }
        .text_blue_about{
            font-size: 14px;
            font-family: "Poppins", Sans-serif;
        }
        .active, .accordion:hover {
            background-color: #fff;

        }
        .position-name{
            float:left;
            font-weight:600;
            font-size: 1rem;
            text-align: left;
            width: 50%;
            font-family: "Poppins", Sans-serif;
        }
        .aply-btn{
            float: right;
            font-weight: 600;
            border: 1px solid #003d71;
            padding: .3rem;
            background-color:#003d71;
            color: #003d71;
            font-size: 13px;
            font-family: "Poppins", Sans-serif;
        }
        .aply-btn:hover{
            background-color:#e30016;
            border: 1px solid #e30016;
        }
        .aply-btn a{
            color: #ffffff;
        }
        .aply-btn a:hover{
            color: #ffffff;
            text-decoration: none;
        }
        .time{
            text-align:center;
            font-family: "Poppins", Sans-serif;
        }
        .panel {

            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
            font-family: "Poppins", Sans-serif;
        }
        .panel li{
            font-family: "Poppins", Sans-serif !important;
            font-size: 13px;
        }
        .panel p{
            font-family: "Poppins", Sans-serif !important;
            font-size: 13px;
        }
        .wwus{
            font-family: "Poppins", Sans-serif !important;
            font-size: 13px;
        }
        .breadcrumbs {
            padding: 0rem 1.0rem;
        }

        .cf{
            display: flex;
            justify-content: flex-end;
            margin-right: 1em;
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 76px !important;
            z-index: -999999;
            opacity: 0;
        }

        @media screen and (max-width: 600px) {
            .team-sd {
                padding: 0em 2.5em 0em 2.5em;
            }
            .content-for-wwu h5 br{
                display: none;
            }

            .filter {
                display: block;
            }

            .filter select {
                margin: 1em 0em 1em 0em;
            }

            .cf{
                display: flex;
                justify-content: flex-end;
                margin: 1em 0em 1em 0em;
            }
        }
    </style>
    <div class="team-banner video-page">
    <p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Work</span> With Us</p>
    </div>
    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Work With Us</span></a></span>
            </div>
        </div>
    </div>
    <section class="white-paper-page" id="white-paper-page"  style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row" style="">
                <div class="col-md-9">

                    <div class="gallery-box1">
                        <div style="padding: 0px;" class="container">
                            <div class="custom_heading">
                                <h5 style="font-weight:700;margin-left: 0rem;" class="custom-title2 ct adl-2">Work With Us</h5>
                                <p class="hnc"></p>
                            </div>
                            <div class="custom_text">
                                <p>
                                    At Netrika, we work with the world’s leading brands to enhance and transform the way they do business. We believe in creating a perfect balance of raw talent and experienced professionals which makes us a dynamic environment to work in. Our leadership consists of industry pioneers and some of the best minds who would nurture you by giving hands-on experience in the industry, ideal for your fast track career growth.
                                </p>
                            </div>

                            <div style="margin-bottom: 2rem;" class="icon-services">
                                <div class="container">
                                    <div class="custom_text">
                                        <p> </p>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="icon-infobox">
                                                <div class="infobox-icon">
                                                    <div class="infobox-icon-wrap">
                                                        <img style="width: 45%" src="/img/services/icons/hands-on-experience.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="infobox-content content-for-wwu">
                                                    <h5>Hands On Experience with leading industries
                                                    </h5>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="icon-infobox">
                                                <div class="infobox-icon">
                                                    <div class="infobox-icon-wrap">
                                                        <img style="width: 45%" src="/img/services/icons/flexible-and-open-work-culture.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="infobox-content content-for-wwu">
                                                    <h5>Flexible and open work culture</h5>
                                                </div>
                                            </div>
                                        </div>


                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="icon-infobox">--}}
                                        {{--<div class="infobox-icon">--}}
                                        {{--<div class="infobox-icon-wrap">--}}
                                        {{--<img style="width: 45%" src="/img/services/icons/secured-vetted-transport.svg" alt="">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="infobox-content">--}}
                                        {{--<h5>Secured &amp; Vetted Transport</h5>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="custom_heading">
                                <h2 style="text-align: center;" class="custom-title"><span style="font-weight: 400;">Join Our</span> Big Family</h2>
                                <p></p>
                            </div>

                            <div class="mfilter">

                               <div class="filter">

{{--                                   {{dd($data['get_career_pos'])}}--}}

                                   @if(isset($data['get_career_pos']))

                                       <select class="form-control" name="position" id="position" onchange="return ApplyFilters('game');">
                                           <option value="">--Select a Position--</option>
                                       @foreach($data['get_career_pos'] as $key=>$get_career_pos)

                                              <option value="{{$get_career_pos->id}}">{{$get_career_pos->name}}</option>

                                       @endforeach

                                       </select>


                                   @endif

                                   @if(isset($data['get_career_location']))

                                           <select class="form-control" name="location" id="location" onchange="return ApplyFilters('game');">
                                               <option value="">--Select a Location--</option>
                                       @foreach($data['get_career_location'] as $key=>$get_career_location)

                                                   <option value="{{$get_career_location->id}}">{{$get_career_location->name}}</option>

                                               @endforeach

                                           </select>

                                   @endif


                               @if(isset($data['get_career_dep']))

                                           <select class="form-control" name="department" id="department" onchange="return ApplyFilters('game');">
                                               <option value="">--Select a Department--</option>
                                               @foreach($data['get_career_dep'] as $key=>$get_career_dep)

                                                   <option value="{{$get_career_dep->id}}">{{$get_career_dep->name}}</option>

                                               @endforeach

                                           </select>

                                   @endif

                               </div>


                                <div class="cf">
                                    <a href="#" class="" style="color: red;">Clear Filter</a>
                                </div>

                            </div>


                            <div class="careers">
                                <div class="row" style="border-bottom: 1px solid #dadada;margin: 0rem 0rem;"><span class="position-name" style="width: 68%;font-weight:400;">Position</span><span class="time">Type</span></div>


                                <div id="ajax-data">

                                @if(isset($get_career))

                                    @foreach($get_career as $key=>$get_career_data)

                                        <button class="accordion"><span class="position-name">{{$get_career_data->position}}</span><span class="time">{{$get_career_data->type}}</span><span class="aply-btn"><a  data-toggle="modal" data-target="#exampleModalCenters"  href="#">Apply Now</a></span></button>

                                        <div class="panel {{$key == 0 ? 'fpan' : ''}}">
                                            <div class="ddl">
                                                <p><strong>Designation:</strong> {{$get_career_data->designation}}</p>

                                                <p><strong>Department:</strong> {{$get_career_data->department}}</p>

                                                <p><strong>Location:</strong> {{$get_career_data->location}}</p>
                                                @if($get_career_data->certification != '' || $get_career_data->certification != null)
                                                    <p><strong>Certification:</strong> {{$get_career_data->certification}}</p>

                                                @endif
                                            </div>

                                            @if($get_career_data->roles_n_responsiblities != '' || $get_career_data->roles_n_responsiblities != null)
                                            <strong class="text_blue_about">ROLE &amp; RESPONSIBILITIES:</strong>
                                            {!! $get_career_data->roles_n_responsiblities !!}

                                            @endif

                                            @if($get_career_data->required_skills != '' || $get_career_data->required_skills != null)

                                            <strong class="text_blue_about">Required Skills</strong>
                                            {!! $get_career_data->required_skills !!}
                                            @endif

                                                @if($get_career_data->experience != '' || $get_career_data->experience != null)
                                            <strong class="text_blue_about">Experience:</strong>
                                                {!! $get_career_data->experience !!}

                                            @endif

                                            @if($get_career_data->job_description != '' || $get_career_data->job_description != null)
                                                
                                                <strong class="text_blue_about">Job Description:</strong>
                                                {!! $get_career_data->job_description !!}
                                            @endif

                                            @if($get_career_data->desired_skills != '' || $get_career_data->desired_skills != null)
                                                <strong class="text_blue_about">Desired Skills:</strong>
                                                {!! $get_career_data->desired_skills !!}
                                            @endif




                                            @if($get_career_data->academic_qualification != '' || $get_career_data->academic_qualification != null)
                                                <strong class="text_blue_about">Academic Qualification:</strong>
                                                {!! $get_career_data->academic_qualification !!}
                                            @endif


                                        </div>

                                    @endforeach

                                        <div style="" class="col-md-12 row button-box-text">

                                            {{ $get_career->appends(['cat' => 999999,'all' => 1])->render() }}
                                        </div>

                                @endif


                                </div>


                            </div>
                            <div style="" class="col-md-12 row button-box-text">


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-sd sl">

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
                            <a  target="_blank"  href="/pdf/netrika-consulting-pvt-ltd-brochure.pdf" class="brochure-btn">
                                <span class="sidebar-btn-icons"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                <span>Corporate Brochure</span>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-testimonial-box">
                        <div class="sidebar-testimonial slider">

                            @if(isset($quotes))

                                @foreach($quotes as $key=> $get_quotes)

                                    <div>
                                        <div class="testimonialsidebar"><p class="hb">{{$get_quotes->quotes}}</p>
                                        </div>
                                        <div class="testimonialsidebar-info">
                                            <div class="testimonialsidebar-image"><img src="/img/team/quotes/{{$get_quotes->user_image}}" width="50" height="50"></div>
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


                    @if(isset($data['get_newsroom_data']))


                        <div class="sidebar-casestudies-box">
                            <h6 class="sidebar-custom-title">Newsroom
                            </h6>
                            <div class="kkb">
                                <p class="hnc"></p>
                            </div>
                            <div class="cbv">
                                <a href="/newsroom">View All ></a>
                            </div>

                            <div class="sidebar-cases1 sidebar-cases sidebar-photos slider">

                                @foreach($data['get_newsroom_data'] as $key=>$get_newsroom_data)
                                    {{--{{dd($get_newsroom_data)}}--}}
                                    <div>
                                        <div class="posts-item">
                                            <div class="sidebarpost-image">
                                                <a target="_blank" href="{{$get_newsroom_data->article_link}}"><img src="/img/newsroom/{{$get_newsroom_data->thumbnail}}" alt="newsrooms"></a>
                                            </div>
                                            <div class="sidebarpost-text">
                                                {{--<h5 class="sidebarpost-title"><a href="#">--}}
                                                {{--</a></h5>--}}
                                                <div class="sidebarpost-summary">{{$get_newsroom_data->text}}
                                                </div></div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                        </div>

                    @endif



                </div>
            </div>
        </div>
    </section>
    <!-- Apply box -->
    <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <h5 style="font-weight:700;color: #ffffff;text-align: left;" class="custom-title2 ct adl-2">Fill The Form</h5><p class="hnc"></p>
                                </div>
                                <form id="quick-enquiry-form" method="post" action="/work-with-us" class="quick-enquiry-form" enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>
                                                <div class="input-group">
                                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>
                                                <div class="input-group">
                                                    <input id="phone_number" name="phone_number" type="text" class="form-control" placeholder="Phone Number*" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <textarea name="message" cols="80" rows="1" class="form-control messagebox" placeholder="Your Message *" required></textarea>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>
                                                <div class="input-group">
                                                    <input id="resume" name="resume" type="file" class="form-control" placeholder="Phone Number*" required>
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak"></div>

                                                </div>

                                                <div class="input-group">

                                                    <input type="text" name="a_data_value" style="display:none !important" tabindex="-1" autocomplete="off" value="kbees">
                                                    
                                                    <button style="margin-top: 1.1rem;background-color:#e30016;" type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
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

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>


    <script>



        var isFilterApplied = false;
        var ApplyFilters = function(tab_id){


            var position = document.getElementById("position");
            position = position.options[position.selectedIndex].value;

            var location = document.getElementById("location");
            location = location.options[location.selectedIndex].value;

            var department = document.getElementById("department");
            department = department.options[department.selectedIndex].value;

            var cat_slug = tab_id;

            if (cat_slug == undefined){
                cat_slug = 999999;
            }

            isFilterApplied = true;
            $('.cf').css('display','flex');

            var page = 1;

            $.ajax({

                type:'GET',

                url : '/work-with-us?page=' + page+'&position='+position+'&department='+department+'&location='+location,


                data:{cat_slug:cat_slug,position:position,location:location,department:department},

                success:function(response){
                    document.getElementById('ajax-data').innerHTML = response;

                    window.history.pushState("Details", "Title", '/work-with-us?page=' + page+'&position='+position+'&department='+department+'&location='+location);
                },

            });

        }


        $(document).ready(function() {

            if(isFilterApplied == false){
                $('.cf').css('display','none');
            }else{
                $('.cf').css('display','block');
            }

            $(document).on('click', '.cf', function (e) {
                e.preventDefault();

                $('.cf').css('display','none');

                $('.filter').find("select").prop("selectedIndex",0);

                $.ajax({

                    type:'GET',

                    url : '/work-with-us?page=1',


                    data:{cat_slug:999999},

                    success:function(response){
                        document.getElementById('ajax-data').innerHTML = response;

                        window.history.pushState("Details", "Title", '/work-with-us?page=1');
                    },

                });


            });

            $(document).on('click', '.pagination a', function (e) {
                e.preventDefault();

                var position = document.getElementById("position");
                position = position.options[position.selectedIndex].value;

                var location = document.getElementById("location");
                location = location.options[location.selectedIndex].value;

                var department = document.getElementById("department");
                department = department.options[department.selectedIndex].value;

                var href = $(this).attr('href');
                var result = {};
                var pars = href.split("?")[1].split("&");

                for (var i = 0; i < pars.length; i++)
                {
                    var tmp = pars[i].split("=");
                    result[tmp[0]] = tmp[1];
                }

                var ajax_url = result.page;
                var cat_slug = result.cat;
                var all = result.all;

                if (all == undefined){
                    cat_slug = 999999;
                }

                $.ajax({

                    type:'GET',

                    url : '/work-with-us?page=' + ajax_url,


                    data:{page:ajax_url,cat_slug:cat_slug,position:position,location:location,department:department},

                    success:function(response){
                        document.getElementById('ajax-data').innerHTML = response;

                        window.history.pushState("Details", "Title", '/work-with-us?page=' + ajax_url+'&position='+position+'&department='+department+'&location='+location);

                        // Scroll to the top
                        $('body,html').animate({
                            scrollTop: 1000
                        }, 1000);
                    },

                });
            });
        });




    </script>


@endsection