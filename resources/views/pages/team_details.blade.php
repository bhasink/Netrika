
@extends('layout.app')


@section('content')
    <div class="page_title">
        <div class="container">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="/team"><span property="name">Our Team</span></a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">{{$data['get_team']->name}}</span></a></span>
            </div>
        </div>
    </div>
    <section class="single-team-page" id="single-team-page">

        <div class="container">
            <div class="row">
        <div class="single-memeber-info">
            <div class="custom_heading">
                <h2 class="custom-title member-designation scrollanimation animated bounceIn adl-1">{{$data['get_team']->name}}
                    <span class="subtitle-member">{{$data['get_team']->designation}}</span>
                    <span class="subtitle-member">{{$data['get_team']->certifications}}</span>

                </h2>
            </div>
        </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row">

                <div class="col-md-9">


                    <div class="member-discription-box">
                        <div style="padding: 0px;" class="container">
                            <div class="row">

                                <div class="col-md-5">
                                    <div class="team-member-image">
                                        <img src="/img/team/page/{{$data['get_team']->user_image}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                               <div class="member-exp">

{{--                                   {{dd($data['get_team']->expert_in)}}--}}

                                   @if($data['get_team']->expert_in != "")
                                       <blockquote class="scrollanimation animated fadeIn adl-1"><p><b><span>Expert in</span> : </b>{{$data['get_team']->expert_in}}</p></blockquote>
                                   @endif
                                       <blockquote class="scrollanimation animated fadeIn adl-2"><p><b><span>Experience</span> : </b>{{$data['get_team']->experience}}</p></blockquote>

                                       <blockquote class="scrollanimation animated fadeIn adl-3"><p><b><span>Email</span> : </b>{{$data['get_team']->email}}</p></blockquote>

                                   @if($data['get_team']->phone != "")
                                   <blockquote class="scrollanimation animated fadeIn adl-4"><p><b><span>Phone</span> : </b>{{$data['get_team']->phone}}</p></blockquote>
                                   @endif

                               </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom_text" style="padding: 1em 4em 4em 4em;">
                       {!! $data['get_team']->description !!}
                    </div>
                </div>

                <div class="col-md-3 team-sd">
                    <div class="sidebar-card">
                        <div class="sidebar-card-title"> Reach out to us
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

    <section class="cta" id="cta">
        <div class="container">
            <div class="row">

                <div class="col-md-12 cta-box">
                    <div class="cta-content">
                        <h3 class="cta-title scrollanimation animated bounceIn adl-2">Looking for top of the line business expertise and advisory?</h3>
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
            autoplay: true,
            autoplaySpeed: 2000,
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
