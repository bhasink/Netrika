
@extends('layout.app')


@section('content')

    <div class="team-banner">
        <p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Our</span> Core Team</p>
    </div>

<div class="page_title">
    <div class="container-fluid">
        <div class="breadcrumbs" style="padding: 0rem 2.3rem;">
            <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
            <span><a href="#"><span property="name">Our Core Team</span></a></span>
        </div>
    </div>
</div>
<section class="team-page" id="team-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">

                <div class="filp-boxs-team">
                    <div style="padding: 0px;" class="container">

                        @if(isset($data['get_team']))



                        <div class="row">

                            @foreach($data['get_team'] as $key=>$get_team)



                                <div class="col-md-4 single-team ">
                                    <div class="flip-box-team">
                                        <div class="flip-box-team-inner">
                                            <div class="flip-box-team-front">
                                                <div class="flip-team-heading">
                                                    <img style="width: 100%;" src="/img/team/page/{{$get_team->user_image}}" alt="Teams">
                                                </div>

                                            </div>
                                            <a href="/team/{{$get_team->slug}}">
                                            <div class="flip-box-team-back">

                                                <div class="flip-team-back-text">
                                                   {{$get_team->quotes}}
                                                </div>
                                                <div class="social-team">
                                                    <p style="margin-bottom: 0.0rem;font-weight: 600;">Follow Me On:</p>
                                                    <ul class="widget_socials_team">

                                                        <li>
                                                            <a target="_blank" class="hb twitter-team" href="{{$get_team->linkedin}}">
                                                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><defs><style>.cls-1{fill:#2867b2;}.cls-2{fill:#fff;}</style></defs><title>Linkedin</title><path class="cls-1" d="M76.22,69.82a1.21,1.21,0,0,0,1.22-1.28c0-.9-.55-1.34-1.67-1.34H74V72h.68V69.88h.84l0,0,1.3,2h.73l-1.4-2.12Zm-.79-.48h-.79v-1.6h1c.52,0,1.11.09,1.11.76S76.16,69.34,75.43,69.34Z"/><path class="cls-1" d="M75.51,65.09A4.49,4.49,0,1,0,80,69.58,4.44,4.44,0,0,0,75.51,65.09Zm0,8.39a3.9,3.9,0,1,1,3.83-3.9A3.81,3.81,0,0,1,75.51,73.48Z"/><path class="cls-1" d="M63.09,5.93H5a5,5,0,0,0-5,4.91V69.15a5,5,0,0,0,5,4.92H63.09a5,5,0,0,0,5-4.92V10.84A5,5,0,0,0,63.09,5.93Z"/><path class="cls-2" d="M10.1,31.48H20.21V64H10.1Zm5.06-16.17a5.86,5.86,0,1,1-5.87,5.86,5.86,5.86,0,0,1,5.87-5.86"/><path class="cls-2" d="M26.55,31.48h9.69v4.44h.14a10.59,10.59,0,0,1,9.56-5.25c10.23,0,12.12,6.73,12.12,15.49V64H48V48.18c0-3.77-.07-8.62-5.26-8.62s-6.06,4.11-6.06,8.35V64H26.55Z"/></svg>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="teams-info">
                                        <a style="text-decoration: none;" href="/team/{{$get_team->slug}}">
                                            <h5 class="name hb">
                                                {{$get_team->name}}
                                            </h5>
                                        </a>
                                        <h5 class="designation hb">{!! $get_team->designation !!}</h5>
                                        <h5 class="certification hb">{!! $get_team->certifications !!}</h5>

                                        <div class="team-page-footer">
                                            <div class="footer-box">
                                                <span class="mob"><i class="fa fa-phone" aria-hidden="true"></i>{{$get_team->phone}}</span>
                                                <a href="mailto:{{$get_team->email}}"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                <a href="/team-profile/{{$get_team->pdf_data}}">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                    @endforeach



                        </div>

                                {{--<div class="ppos">--}}
                                    {{--{{$data['get_team']->links()}}--}}
                                {{--</div>--}}


                                @endif

                    </div>
                </div>
            </div>

            <div class="col-md-3 team-sd">
                <div class="sidebar-card">
                    <div class="sidebar-card-title">  Reach out to us
                    </div>
                    <p><span>Contact us at the Netrika office nearest to you or submit a business inquiry online.</span></p>
                    <div class="sidebar-btn-box">
                        <a  data-toggle="modal" data-target="#exampleModalCenter" href="#" class="sidebar-btn">
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
                                        <div class="testimonialsidebar-image"><img src="/img/team/quotes/{{$get_quotes->user_image}}" width="50" height="50" alt="Teams Testimonials"></div>
                                        <div class="testimonialsidebar-text">
                                            <div class="hb sidebarname">{{$get_quotes->name}}</div>
                                            <div class="hb sidebarcompany">
                                                {{$get_quotes->designation}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        @endif

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
                                        <a href="/white-paper/{{$get_white_paper->slug}}"><img src="/img/white-paper/{{$get_white_paper->image}}" alt="white paper"></a>
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

                    <div class="sidebar-cases slider">

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
    </div>
</section>

<section class="cta" id="cta">
    <div class="container">
        <div class="row">

            <div class="col-md-12 cta-box">
                <div class="cta-content">
                    <h3 class="cta-title scrollanimation adl-2 no_animation">Looking for top of the line business expertise and advisory?</h3>
                </div>
                <div class="cta-action">
                    <a href="#"  class="custom-all-btn cta-btn" data-toggle="modal" data-target="#exampleModalCenterss">
                        <span>Quick Enquiry</span>
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
        autoplay: true,
        autoplaySpeed: 2000,
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
