
@extends('layout.app')


@section('content')

    <style>
        .team-sd {
            padding: 4.5em 2.5em 0em 2.5em;
        }
    </style>

    {{--<div class="team-banner photo-g-page">--}}
        {{--<p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Photo </span> Gallery</p>--}}
    {{--</div>--}}

    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#">Media</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Photo Gallery</span></a></span>
            </div>
        </div>
    </div>
    <section class="picturegallery-page" id="picturegallery-page"  style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row" style="">

                <div class="col-md-9">

                    <div class="gallery-box1">
                        <div style="padding: 0px;" class="container">
                            <div class="custom_heading">
                                <h2 style="text-align: center;" class="custom-title">Photo Gallery</h2>
                                <p></p>
                            </div>

                                <div class="gallery-box">
                                    <div style="padding: 0px;" class="container">
                                        <div class="row" style="margin-top: 1.5em;">


                                            @if(isset($data['get_photogallery']))

                                                @foreach($data['get_photogallery'] as $key => $get_photogallery)

                                                <div class="col-md-4">

                                                    <div style="position: relative;">

                                                        <a class="image-gallery" data-fancybox="gallery"  data-caption="{{$get_photogallery->text}}" href="/img/picture-gallery/original/{{$get_photogallery->image}}"><img src="/img/picture-gallery/thumbnail/{{$get_photogallery->thumbnail}}"></a>
                                                        <div class="top-left hb"> {{\Carbon\Carbon::parse($get_photogallery->custom_date)->format('M d, Y')}}
                                                        </div>
                                                        <div class="bottom-left"><p class="p-content">{{\Illuminate\Support\Str::limit($get_photogallery->text,72)}}</p><p style="position: relative;"></p>
                                                        </div>

                                                    </div>

                                                </div>

                                                @endforeach

                                            @endif



                                        </div>

                                        <div style="" class="col-md-12 row button-box-text">
                                            {{ $data['get_photogallery']->appends(['cat' => 999999,'all' => 1])->render() }}
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


                        @if(isset($data['get_video_gallery']))

                            <div class="sidebar-casestudies-box">
                                <h6 class="sidebar-custom-title">Video Gallery
                                </h6>

                                <div class="cbv">
                                    <a href="/videogallery">View All ></a>
                                </div>

                                <div class="sidebar-cases sidebar-photos slider">

                                    @foreach($data['get_video_gallery'] as $key=>$get_video_gallery)

                                        <div>
                                            <div class="posts-item">
                                                <div class="sidebarpost-image">

                                                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v={{$get_video_gallery->video_link}}">
                                                        <div style="background: url(http://img.youtube.com/vi/{{$get_video_gallery->video_link}}/hqdefault.jpg);" class="video_gallery_image"></div>

                                                    </a>
                                                </div>
                                                <div class="sidebarpost-text">
                                                    {{--<h5 class="sidebarpost-title"><a href="#">--}}
                                                    {{--</a></h5>--}}
                                                    <div class="sidebarpost-summary">{{\Illuminate\Support\Str::limit($get_video_gallery->title,100)}}</div>
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
                                                    <a target="_blank" href="{{$get_newsroom_data->article_link}}"><img src="/img/newsroom/{{$get_newsroom_data->thumbnail}}"></a>
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

    <script type="text/javascript">

        $(".sidebar-photos").slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });

    </script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        tpj(document).ready(function () {
            /*
             *  Simple image gallery. Uses default settings
             */
            tpj('.image-gallery').fancybox();
            tpj(".bottom-left").on("click", function (event) {
                event.preventDefault();
                tpj(this).siblings(".image-gallery").trigger("click");
            }); // on
        });
    </script>
@endsection
