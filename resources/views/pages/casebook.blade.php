
@extends('layout.app')


@section('content')

    <style>
        .sidebarpost-title {
            margin: 15px 0 0;
            font-size: 14px;
            line-height: 20px;
        }

        .team-sd {
            padding: 11em 2.5em 0em 2.5em;
        }
         .cread:hover{
             color: #e30016;
         }
        @media screen and (max-width: 600px) {
            .team-sd {
                padding: 0em 2.5em 0em 2.5em;
            }
        }
    </style>

    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs" style="margin-left: 30px;">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Our Casebook</span></a></span>
            </div>
        </div>
    </div>
    <section class="casebook-page" id="casebook-page" style="background: #ffffff;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-9">
                    <div class="custom_heading">
                        <h2 style="text-align: center;" class="custom-title">Our Casebook</h2>
                        <div class="kkb">
                            <p class="hnc"></p>
                        </div>
                    </div>
                    <div class="boxs-casebook">
                        <div style="padding: 0px;" class="container">


                            <div class="row casebook-box-nav">

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="    display: flex;
    justify-content: center;
">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="showall-tab" data-toggle="pill" href="#showall" role="tab" aria-controls="showall" aria-selected="true" onclick="return ApplyFilters();">All</a>
                                    </li>

                                    @if(isset($data['get_service_category']))

                                        @foreach($data['get_service_category'] as $key=>$get_service_category)

                                            <li class="nav-item">
                                                <a class="nav-link" id="{{$get_service_category->slug}}" data-toggle="pill" href="#{{$get_service_category->slug}}1" role="tab" aria-controls="{{$get_service_category->slug}}1" aria-selected="false"  onclick="return ApplyFilters('{{$get_service_category->slug}}');">{{$get_service_category->name}}</a>
                                            </li>

                                        @endforeach

                                    @endif

                                </ul>
                            </div>

                            <div class="container">
                                <div class="tab-content" id="pills-tabContent">

                                    <div id="ajax-data">
                                        <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
                                            @if(isset($data['get_casebook']))

                                                @foreach($data['get_casebook'] as $key=>$get_casebook_data)

                                                    <div class="Portfolio">
                                                        <a href="/casebook/{{$get_casebook_data->slug}}">
                                                        <div class="case-image">
                                                          <img  class="card-img" src="/img/case-studies/{{$get_casebook_data->thumbnail}}" alt="">
                                                            <div class="overlays-cashbook">
                                                                <div class="mid-text-box">
                                                                    <h6 class="casebook-category">{{$get_casebook_data->servicecat->name}}</h6>
                                                                    <h5 class="casebook-title">{{$get_casebook_data->title}}</h5>

                                                                    <h6 class="casebook-category">{{\Illuminate\Support\Str::limit($get_casebook_data->short_des_main,50)}} <span class="cread"></span></h6>

                                                                    <h6 class="cread">Read More</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                    </div>

                                                @endforeach


                                                    <div style="" class="col-md-12 row button-box-text">
                                                        {{ $data['get_casebook']->appends(['cat' => 999999,'all' => 1])->render() }}
                                                    </div>


                                            @endif


                                        </div>

                                    </div>


                                </div>
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

                    <div class="sidebar-casestudies-box">
                        <h6 class="sidebar-custom-title">Blog Post
                        </h6>

                        <div class="cbv">
                            <a href="https://wordpress-163112-1321751.cloudwaysapps.com/">View All ></a>
                        </div>

                        <div class="sidebar-cases slider">
                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="https://wordpress-163112-1321751.cloudwaysapps.com/impact-on-counterfeiting-current-market-response__trashed/"><img src="/img/blog/blog2.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="https://wordpress-163112-1321751.cloudwaysapps.com/impact-on-counterfeiting-current-market-response__trashed/">Impact On Counterfeiting- Current Market Response Covid-19
                                            </a></h5>
                                        <div class="sidebarpost-summary">Impact on Counterfeiting The invention of e-commerce websites has brought a revolution in the way we shop today.</div></div>
                                </div>
                            </div>
                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="https://wordpress-163112-1321751.cloudwaysapps.com/the-advantages-of-forensic-due-diligence/"><img src="/img/blog/blog3.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="https://wordpress-163112-1321751.cloudwaysapps.com/the-advantages-of-forensic-due-diligence/">The Advantages of Forensic Due Diligence
                                            </a></h5>
                                        <div class="sidebarpost-summary">When it comes to an acquisition or making a significant investment, forensic due diligence allows organizations to analyze the financial condition of their target opportunity in multiple ways.

                                        </div></div>
                                </div>
                            </div>

                            <div>
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="https://wordpress-163112-1321751.cloudwaysapps.com/everything-you-need-to-know-about-the-varied-due-diligence-procedures/"><img src="/img/blog/blog1.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="https://wordpress-163112-1321751.cloudwaysapps.com/everything-you-need-to-know-about-the-varied-due-diligence-procedures/">Everything You Need to Know About the Varied Due Diligence Procedures</a></h5>
                                        <div class="sidebarpost-summary">Organizations rely on due diligence for evaluating and understanding a potential partner or buyer as well as acquisition.</div></div>
                                </div>
                            </div>
                        </div>


                    </div>




                    @if(isset($data['get_white_paper']))

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
                                                <a href="/white-paper/{{$get_white_paper->slug}}"><img src="/img/white-paper/{{$get_white_paper->image}}"></a>
                                            </div>
                                            <div class="sidebarpost-text">
                                                <h5 class="sidebarpost-title"><a href="/white-paper/{{$get_white_paper->slug}}">{{$get_white_paper->title}}</a></h5>

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
    </section>

    <section class="cta" id="cta" style="padding: 0;">
        <div class="container">
            <div class="row">

                {{--<div class="col-md-12 cta-box">--}}
                    {{--<div class="cta-content">--}}
                        {{--<h3 class="cta-title">Looking for top of the line business expertise and advisory?</h3>--}}
                    {{--</div>--}}
                    {{--<div class="cta-action">--}}
                        {{--<a href="#"  class="custom-all-btn cta-btn" data-toggle="modal" data-target="#exampleModalCenterss">--}}
                            {{--<span>Quick Enquiry</span>--}}
                            {{--<i class="fa fa-chevron-right"></i>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
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

    <script>



        var isFilterApplied = false;
        var ApplyFilters = function(tab_id){

            var cat_slug = tab_id;

            if (cat_slug == undefined){
                cat_slug = 999999;
            }

            isFilterApplied = true;

            var page = 1;

            $.ajax({

                type:'GET',

                url : '/casebook?page=' + page,


                data:{cat_slug:cat_slug},

                success:function(response){
                    document.getElementById('ajax-data').innerHTML = response;
                    // window.history.pushState("Netrika Casestudy", "Details",url_data);
                },

            });

        }

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function (e) {
                e.preventDefault();

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

                    url : '/casebook?page=' + ajax_url,


                    data:{cat_slug:cat_slug},

                    success:function(response){
                        document.getElementById('ajax-data').innerHTML = response;

                        window.history.pushState("Details", "Title", '/casebook?page=' + ajax_url);

                        // Scroll to the top
                        $('body,html').animate({
                            scrollTop: 250
                        }, 1000);
                    },

                });
            });
        });




    </script>

@endsection
