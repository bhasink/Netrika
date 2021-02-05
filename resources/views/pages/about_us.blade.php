
@extends('layout.app')


@section('content')
    <div class="page_title">
        <div class="container">
            <div class="breadcrumbs">
                <span><a href="#">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Our Casebook</span></a></span>
            </div>
        </div>
    </div>
    <section class="casebook-page" id="casebook-page">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="custom_heading">
                        <h2 style="text-align: center;" class="custom-title">Our Casebook</h2>
                    </div>
                    <div class="boxs-casebook">
                        <div style="padding: 0px;" class="container">
                            <div class="row">

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="showall-tab" data-toggle="pill" href="#showall" role="tab" aria-controls="showall" aria-selected="true">Show All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Cars-tab" data-toggle="pill" href="#Cars" role="tab" aria-controls="Cars" aria-selected="false">Cars</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="City-tab" data-toggle="pill" href="#City" role="tab" aria-controls="City" aria-selected="false">City</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Forest-tab" data-toggle="pill" href="#Forest" role="tab" aria-controls="Forest" aria-selected="false">Forest</a>
                                    </li>
                                </ul>
                            </div><hr noshade style="margin-top:-20px;">
                            <div class="container">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>

                                    </div>
                                    <div class="tab-pane fade" id="Cars" role="tabpanel" aria-labelledby="Cars-tab">
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                    </div>
                                    <div class="tab-pane fade" id="City" role="tabpanel" aria-labelledby="City-tab">
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                    </div>
                                    <div class="tab-pane fade" id="Forest" role="tabpanel" aria-labelledby="Forest-tab">
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                        <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a></div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-md-3">
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
                            <a href="#" class="brochure-btn">
                                <span class="sidebar-btn-icons"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                <span>Corporate Brochure</span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-testimonial-box">
                        <div class="sidebar-testimonial slider">
                            <div>
                                <div class="testimonialsidebar"><p>The course was indeed very apt for the security professional, the topics covered, the speakers were excellent.</p>
                                </div>
                                <div class="testimonialsidebar-info">
                                    <div class="testimonialsidebar-image"><img src="img/sidebar-testimonial/Testimonial.jpg" width="50" height="50"></div>
                                    <div class="testimonialsidebar-text">
                                        <div class="sidebarname">Saurabh Deshpande</div>
                                        <div class="sidebarcompany">
                                            Business Development Manager, ARAI
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonialsidebar"><p>The course was indeed very apt for the security professional, the topics covered, the speakers were excellent.</p>
                                </div>
                                <div class="testimonialsidebar-info">
                                    <div class="testimonialsidebar-image"><img src="img/sidebar-testimonial/Testimonial.jpg" width="50" height="50"></div>
                                    <div class="testimonialsidebar-text">
                                        <div class="sidebarname">Saurabh Deshpande</div>
                                        <div class="sidebarcompany">
                                            Business Development Manager, ARAI
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonialsidebar"><p>The course was indeed very apt for the security professional, the topics covered, the speakers were excellent.</p>
                                </div>
                                <div class="testimonialsidebar-info">
                                    <div class="testimonialsidebar-image"><img src="img/sidebar-testimonial/Testimonial.jpg" width="50" height="50"></div>
                                    <div class="testimonialsidebar-text">
                                        <div class="sidebarname">Saurabh Deshpande</div>
                                        <div class="sidebarcompany">
                                            Business Development Manager, ARAI
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            slidesToShow: 1,
            slidesToScroll: 1
        });
    </script>
@endsection
