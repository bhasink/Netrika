
@extends('layout.app')


@section('content')

    <style>

        .team-sd {
            padding: 4.5em 2.5em 0em 2.5em;
        }

        #videogallery-page {
            padding: 0em 1em 0em 1em;
        }

        .sidebarpost-title {
            margin: 15px 0 0;
            font-size: 14px;
            line-height: 20px;
        }

        .video-blk p{
            font-family: Poppins,sans-serif;
            color: #2A383E;
            font-weight: 500;
        }

        .spacer_news_overlay p{
            color: #ffffff;
        }
        .nrm:hover{
            color: #fde528;
        }

        .bkkm{
            color: #ffffff;
            margin-left: 1em;
        }

        .bkkm:hover{
            color: #fde528;
            margin-left: 1em;
        }

        .spacer_news_overlay p {
            height: unset !important;
            margin: 1em 0 0 0;
        }

        @media screen and (max-width: 600px) {
            .team-sd {
                padding: 0em 2.5em 0em 2.5em;
            }
        }
    </style>

    {{--<div class="team-banner news-page">--}}
        {{--<p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">News</span> Room</p>--}}
    {{--</div>--}}
    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#">Media</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Newsroom</span></a></span>
            </div>
        </div>
    </div>
    <section class="videogallery-page" id="videogallery-page" style="background: #ffffff;">
        <div class="container-fluid">
            <div class="row" style="">

                <div class="col-md-9">

                    <div class="gallery-box1">
                        <div style="padding: 0px;" class="container">
                            <div class="custom_heading">
                                <h2 style="text-align: center;" class="custom-title">Newsroom</h2>
                                <p></p>
                            </div>
                            <div class="row" style="margin-top: 1.5em;">


                                @if(isset($data['newsroom']))

                                    @foreach($data['newsroom'] as $key=>$get_newsroom)
{{--{{dd($get_newsroom)}}--}}
                                        <div class="col-md-4 video-blk">
                                            <a target="_blank" href="{{$get_newsroom->article_link}}">
                                            <div class="spacer_news">


                                                    <div style="background: url('/img/newsroom/{{$get_newsroom->thumbnail}}');" class="news_gallery_image"></div>


                                                <p>{{\Illuminate\Support\Str::limit($get_newsroom->text,90)}}

                                                <div class="spacer_news_overlay" style="opacity:0;">

                                                    <p>{{$get_newsroom->text}} </p>

                                                <span class="bkkm">Read More</span>

                                                </div>

                                            </a>

                                  </div>

                                        </div>


                                    @endforeach
                                @endif

                            </div>

                            <div style="" class="col-md-12 row button-box-text">
                                {{ $data['newsroom']->appends(['cat' => 999999,'all' => 1])->render() }}
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
                                                <a href="/casebook/{{$get_casebook->slug}}"><img src="/img/case-studies/{{$get_casebook->thumbnail}}"></a>
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

@endsection
