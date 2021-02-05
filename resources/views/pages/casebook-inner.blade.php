
@extends('layout.app')


@section('content')

    <style>
        .team-banner.service-banner p {
            width: 700px;
            white-space: normal;
        }

        .sidebarpost-title {
            margin: 15px 0 0;
            font-size: 14px;
            line-height: 20px;
        }

        .team-banner{
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/case-studies/banner/{{$data['get_casebook']->banner}}');
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .casebook-content-box {
            margin-top: 0rem;
            padding: 1rem;
        }

        .nav {
            padding: 0px 20px 0px 20px;
        }

        .casbook-inner-tabs .nav-item {
             margin-right: 0rem;
        }
        .case-title-box .kkb{
           float: right;
        }
        .case-title-box h3{
            transition: .5s;
        }
        .case-title-box h3:hover{
            transform: scale(1.1) translateX(10px);
        }
        @media screen and (max-width: 600px) {
        .team-banner{
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/case-studies/banner/res/{{$data['get_casebook']->banner_res}}');
        background-size: cover;
            }

            .nav {
                padding: 20px 0px 0px 0px;
            }
            .case-title-box .kkb{
                float: left;
            }
        }
    </style>


    <div class="team-banner service-banner">


        <?php
        $total_word_count = str_word_count($data['get_casebook']->title);
        $total_word_count = $total_word_count/2;
        ?>

        <p> <span style="color: rgb(253, 228, 40);">{!! implode(' ', array_slice(explode(' ', $data['get_casebook']->title), 0, $total_word_count)) !!}</span> {!! implode(' ', array_slice(explode(' ', $data['get_casebook']->title), $total_word_count, 20)) !!}</p>

    </div>
    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs"  style="margin-left: 12px;">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="/casebook">Our Casebook</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">{{$data['get_casebook']->title}}</span></a></span>
            </div>
        </div>
    </div>
    <section class="casebook-page" id="casebook-page" style="background: #ffffff;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-9">
                    <div class="casebook-content-box">
                        {{--<div class="custom_heading">--}}
                            {{--<h2 style="text-align: center;" class="custom-title">Casebook inner</h2>--}}
                            {{--<div class="custom_heading"><p></p></div>--}}
                        {{--</div>--}}
                        {{--<div class="custom_sub_heading">--}}
                            {{--<h5 style="text-align: left;" class="custom-sub-title">DO EVERYTHING THE RIGHT WAY--}}
                            {{--</h5>--}}
                        {{--</div>--}}
                        <div class="row">

                            {{--<div class="col-md-6">--}}


                        <div class="custom_text">

                            @if($data['get_casebook']->short_des != '')

                                {!! $data['get_casebook']->short_des !!}

                            @endif

                        </div>
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                    {{--<div class="service-box-img">--}}
                                        {{--<img src="/img/services/Forensic-Investigation.jpg" alt="">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}



                        {{--<div class="main-box-case"><ul class="nav nav-tabs casbook-inner-tabs" id="myTab" role="tablist">--}}


                                {{--@if(isset($data['get_casebook_details']))--}}
                                    {{--@foreach($data['get_casebook_details'] as $key=>$get_casebook_details)--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link {{$key == 0 ? 'active': ''}}" id="home{{$get_casebook_details->case_book_id}}-tab{{$key*999}}" data-toggle="tab" href="#home{{$get_casebook_details->case_book_id}}{{$key*999}}" role="tab" aria-controls="home{{$get_casebook_details->case_book_id}}{{$key*999}}" aria-selected="{{$key == 0 ? 'true': 'false'}}">{{$get_casebook_details->tab_name}}</a>--}}
                                    {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}

                            {{--</ul>--}}
                            {{--<div class="tab-content" id="myTabContent">--}}

                                {{--@if(isset($data['get_casebook_details']))--}}
                                    {{--@foreach($data['get_casebook_details'] as $key=>$get_casebook_details)--}}

                                {{--<div class="tab-pane fade show {{$key == 0 ? 'active': ''}}" id="home{{$get_casebook_details->case_book_id}}{{$key*999}}" role="tabpanel" aria-labelledby="home{{$get_casebook_details->case_book_id}}-tab{{$key*999}}">--}}
                                    {{--<div class="case-content-box">--}}
                                       {{--{!! $get_casebook_details->tab_content !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                    {{--@endforeach--}}
                                {{--@endif--}}

                            {{--</div>--}}
                        {{--</div>--}}


                            @if(isset($data['get_casebook_details']))
                                @foreach($data['get_casebook_details'] as $key=>$get_casebook_details)
                            <div class="container-fluid box-case-with-top">
                            <div class="row boxcase">
                                <div class="col-md-3 case-title-box">
                                    <h3>{{$get_casebook_details->tab_name}}</h3>
                                    <div class="kkb">
                                        <p class="hnc"></p>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="box-casbook-text">
                                        {!! $get_casebook_details->tab_content !!}
                                    </div>
                                </div>
                            </div>
                            </div>

                                @endforeach
                            @endif


                        </div>
                    </div>

                </div>



                <div class="col-md-3 team-sd sl">

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
@endsection
