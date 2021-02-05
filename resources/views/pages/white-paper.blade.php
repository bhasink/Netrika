
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

        @media screen and (max-width: 600px) {
            .team-sd {
                padding: 0em 2.5em 0em 2.5em;
            }
        }
    </style>

    {{--<div class="team-banner w-paper-page">--}}
        {{--<p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Whitepaper </span> And Surveys</p>--}}
    {{--</div>--}}
    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Whitepaper and Surveys </span></a></span>
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
                                <h2 style="text-align: center;" class="custom-title">Whitepaper and Surveys</h2>
                                <p></p>
                            </div>
                            {{--<div class="custom_text">--}}
                                {{--<p>--}}
                                    {{--With the vision to be the leader in the industry by understanding and researching on the new and upcoming market trends, developments and technologies, we publish a number of whitepapers which have insightful information for all the readers.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            <div class="gallery-box">
                                <div style="padding: 0px;" class="container">
                                    <div class="row" style="margin-top: 1.5em;">

                                        <div class="col-md-12">

                                            @if(isset($data['get_white_paper']))

                                                @foreach($data['get_white_paper'] as $key => $get_white_paper)

                                            <div class="whitep-box">
                                                <div class="whitep-content">
                                                    <div class="whitep-header">
                                                        <h6 class="whitep-title ">
                                                        {{$get_white_paper->title}}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="white-paper-btn">


                                                    <a style="text-decoration: none;" href="/white-paper/{{$get_white_paper->slug}}" target="_self" class="button ">
                                                        <span>Download</span>
                                                    </a>
                                                </div>
                                            </div>

                                                @endforeach

                                            @endif


                                        </div>

                                    </div>

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
                                                <a href="/casebook/{{$get_casebook->slug}}"><img src="/img/case-studies/{{$get_casebook->thumbnail}}" alt="casebook"></a>
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
document.getElementsByTagName('meta')["keywords"].content = "Cyber security";
document.getElementsByTagName('meta')["description"].content = "White paper survey Compendium Edition I - A compendium on Covid-19 By Netrika Consulting.";
document.title = "Cyber Security Preparedness Survey by Netrika Consulting.";

</script>
   
@endsection
