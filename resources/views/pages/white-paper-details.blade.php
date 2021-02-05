
@extends('layout.app')


@section('content')



    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">{{$data['get_white_paper']->title}}</span></a></span>
            </div>
        </div>
    </div>
    <section class="white-paper-page" id="white-paper-page"  style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row" style="">

                <div class="col-md-9">


                        <div style="padding: 0px;" class="container">
                            <div class="custom_heading">
                                <h2 style="text-align: center;" class="custom-title">Whitepaper and Surveys</h2>
                                <p></p>
                            </div>
                            <div class="box-download">
                                <h2>{{$data['get_white_paper']->title}}</h2>
                            </div>
                            <div class="gallery-box">
                                <div style="padding: 0px;" class="container">
                                    <div class="row" style="margin-top: 1.5em;">

                                        <div class="col-md-4">
                                          <div class="box-download-image">
                                              <img src="/img/white-paper/main/{{$data['get_white_paper']->image_main}}" alt="">
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="whitep-form-box">
                                            <p>Fill the form to</p>
                                                <h2>Download your copy</h2>
                                            </div>
                                            <div>
                                                <form id="quick-enquiry-form" method="post" action="/white-paper" class="quick-enquiry-form">

                                                    @csrf

                                                    <input type="hidden" name="white_paper_id" value="{{$data['get_white_paper']->id}}">

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group">
                                                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required>
                                                                    <span class="error" style="display: none;">This field is required</span>
                                                                </div>
                                                                <div class="input-group">
                                                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>
                                                                    <span class="error" style="display: none;">This field is required</span>
                                                                </div>
                                                                <div class="input-group">
                                                                    <input id="phone_number" name="phone_number" type="text" class="form-control" placeholder="Mobile Number*" required>
                                                                    <span class="error" style="display: none;">This field is required</span>
                                                                </div>
                                                                {{--<div class="input-group">--}}
                                                                    {{--<input id="name" name="organisation" type="text" class="form-control" placeholder="organisation*" required>--}}
                                                                    {{--<span class="error" style="display: none;">This field is required</span>--}}
                                                                {{--</div>--}}
                                                                <div class="input-group">

                                                                    <input type="text" name="a_data_value" style="display:none !important" tabindex="-1" autocomplete="off" value="kbees">

                                                                    <button style="margin-top: .6rem;" type="submit" class="down-btn wpdbtn">Download<i class="fa fa-download" style="margin-left: 0.5rem;"></i></button>
                                                                </div>
                                                            </div>



                                                        </div> <!--row ends here-->

                                                    </div>  <!--form-group ends here-->
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div style="" class="col-md-12 row button-box-text">


                            </div>
                        </div>
                   
                </div>
                <div class="col-md-3 team-sd sl">

                    <div class="sidebar-card">
                        <div class="sidebar-card-title"> Reach out to us
                        </div>
                        <p><span>Contact us at the Netrika office nearest to you or submit a business inquiry online.</span></p>
                        <div class="sidebar-btn-box">
                            <a href="#"   data-toggle="modal" data-target="#exampleModalCenter" class="sidebar-btn">
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
document.getElementsByTagName('meta')["description"].content = "Cyber security preparedness survey by Netrika Consulting.";
document.title = "Cyber Security Preparedness Survey by Netrika Consulting.";

</script>

@endsection
