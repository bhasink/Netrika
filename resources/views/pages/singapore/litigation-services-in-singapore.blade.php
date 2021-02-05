
@extends('layout.app')

@section('content')


<style>
        /*#sticky {*/
            /*height:100%;*/
            /*!*float:left;*!*/
        /*}*/
        /*#sticky.stick {*/
            /*position: fixed;*/
            /*top: 0;*/
            /*z-index: 10;*/
        /*}*/

        .sidebarpost-image img{
            width: 100%;
            height: auto;
        }

        .team-banner.service-banner p {
            width: 800px;
            white-space: normal;
            line-height: initial;
        }
        .services-b{
            margin-left: 12px;
        }
        .team-banner{
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/services/banner/enforcement-actions-offline-1480x700.jpg');
            background-size: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
        }

        @media  screen and (max-width: 600px) {
            .team-banner{
                background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/services/banner/res/enforcement-actions-offline-600x500.jpg') !important;
                background-size: cover;
            }
            .services-b{
                margin-left: 0px;
            }
        }
    </style>
	
	
	<div class="team-banner service-banner">

        
        <p style="background-color:rgba(0, 46, 91, 0);" class="scrollanimation animated adl-2 bounceIn"><span style="background-color: rgba(0, 46, 91, 0.5);padding: 0px 10px;"> <span style="color: rgb(253, 228, 40);">Litigation </span> Services</span></p>

    </div> 
	
	<div class="page_title">
    <div class="container-fluid">
        <div class="breadcrumbs services-b">
            <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
            <span><a href="#"><span property="name">Services</span></a></span>
            <span><i class="fa fa-angle-right"></i></span>
            <span><a href="brand-protection"><span>Brand Protection</span></a></span>
            <span><i class="fa fa-angle-right"></i></span><span>
            <span>Litigation Services</span></span>
        </div>
    </div>
</div>

<section class="services-page" id="services-page" style="background-color: #ffffff;">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9 service-box-img">

                <div class="our-expert">

                        <div class="custom_heading">
                            <h2 style="text-align: center" class="custom-title">Our Experts</h2>
                            <p></p>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="wpb_wrapper">
                                    <div class="p-box">


                                        
                                            
                                                <div class="mainbox">
                                                    <div class="cards">

                                                        <div class="img-box">
                                                            <img src="/img/team/page/sanjay-kaushik-250x250.jpg" alt="Sanjay Kaushik">
                                                        </div>

                                                        <div class="info">
                                                            <span><b>Sanjay Kaushik </b></span>
                                                            <p>Managing Director </p>
                                                            <p>CFE, CII, FCIISCM, CATS, CCPS, CFAP</p>

                                                        </div>
                                                        <div class="footer-box ">
                                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>+91-124-488-3001</span>
                                                            <a href="mailto:sanjay@netrika.com"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                            <a href="/team-profile/sanjay-kaushik_p.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            
                                                <div class="mainbox">
                                                    <div class="cards">

                                                        <div class="img-box">
                                                            <img src="/img/team/page/dhruv-maingi.jpg" alt="Sanjay Kaushik">
                                                        </div>

                                                        <div class="info">
                                                            <span><b>Dhruv Maingi</b></span>
                                                            <p>Co-Founder &amp; Director-IPR</p>
                                                            <p>ICPS</p>

                                                        </div>
                                                        <div class="footer-box ">
                                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>+91-124-488-3003</span>
                                                            <a href="mailto:dhruv@netrika.com"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                            <a href="/team-profile/dhruv-maingi.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            
                                                <div class="mainbox">
                                                    <div class="cards">

                                                        <div class="img-box">
                                                            <img src="/img/team/page/pravin-parab.jpg" alt="Sanjay Kaushik">
                                                        </div>

                                                        <div class="info">
                                                            <span><b>Pravin Parab </b></span>
                                                            <p>Director-Operations, Western Region and Southern Region</p>
                                                            <p>CFE </p>

                                                        </div>
                                                        <div class="footer-box ">
                                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>+91-22-49035900 </span>
                                                            <a href="mailto:pravin.parab@netrika.com"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                            <a href="/team-profile/pravin-parab.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            
                                                <div class="mainbox">
                                                    <div class="cards">

                                                        <div class="img-box">
                                                            <img src="/img/team/page/ashoutosh-chaudhary.jpg" alt="Sanjay Kaushik">
                                                        </div>

                                                        <div class="info">
                                                            <span><b>Ashutosh Chowdhary</b></span>
                                                            <p>Head-IPR, Northern &amp; Eastern Region</p>
                                                            <p></p>

                                                        </div>
                                                        <div class="footer-box ">
                                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>+91-124-488-3007</span>
                                                            <a href="mailto:ashutosh.chowdhary@netrika.com"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                            <a href="/team-profile/ashutosh-chowdhary.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            
                                        





                                    </div>


                                </div>
                            </div>

                        </div>  <!--container ends here-->

                </div>


                                    <div class="services-content-box">

                        <div class="custom_text con_panel">

                                <h1 style="text-align: center;" class="custom-title"><strong>Litigation Services <br></strong></h1><div class="custom_heading"><p></p></div>
<p style="text-align: left;"><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">After an enclosed investigation has been completed and instances of infringement of IPR and/or copyright are known, Netrika suggests the means forward for businesses with that it works. Netrika's workers oftentimes work closely with enforcement agencies concerning potential criminal proceedings once required. If necessary, separate Litigation Services might also be initiated.</span></p>
<h2 style="text-align: left; color: rgb(0, 46, 91); font-size: 20px;"><strong>Criminal Action</strong></h2><div class="cv custom_heading"><p></p></div>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Market Survey</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Detailed Investigations &amp; Sample Purchase.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Enforcement actions</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Retailer</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Wholesaler</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Manufacturer</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Filing FIR</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Court hearing</span><span style="font-weight: 400;"><br><br></span></li>
</ul>
<h2 style="text-align: left; color: rgb(0, 46, 91); font-size: 20px;"><strong>Civil Actions</strong></h2><div class="cv custom_heading"><p></p></div>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Filing of Civil Suit &amp; Appearance before the Court</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Assisting the Court Commissioners in Execution of Court Orders per location</span></li>
<li style="font-weight: 400;">Drafting &amp; filing of applications/complaint/ settlement application</li>
</ul>
<p style="text-align: left;"><span style="font-weight: 400;">&nbsp;</span></p>
<h2 style="color: rgb(0, 46, 91); font-size: 20px;">Report pretend App &nbsp;</h2><div class="cv custom_heading"><p></p></div>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">In our Litigation Services, we have interaction with your users by putt the ability in their hands to report the pretend merchandise through Report pretend App.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">The app permits the user to report pretend merchandise.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Apart from reportage the whole details, the user may also transfer photos off the pretend product, a location wherever he bought it and also the reason it seems to pretend to the user.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">After reportage the relate United States of America, the user will check the standing of his case on the app.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">You can transfer the app from:&nbsp;</span><span style="font-weight: 400;"><a href="https://play.google.com/store/apps/details?id=com.netrika&amp;hl=en_IN"><img src="https://163112-1470575-raikfcquaxqncofqfm.stackpathdns.com/img/services/flow-charts/play-store.png" width="100" height="30"></a>&nbsp;<a href="https://apps.apple.com/in/app/report-fake/id1446387867"><img src="https://163112-1470575-raikfcquaxqncofqfm.stackpathdns.com/img/services/flow-charts/app-store.png" width="100" height="30"></a></span>
<p><span style="font-weight: 400;"><img src="https://163112-1470575-raikfcquaxqncofqfm.stackpathdns.com/img/services/flow-charts/app.jpg" width="150" height="238"></span></p>
</li>
</ul>

                        </div>

                    </div>
                
                

                

                



            </div>



            <div id="sticky-anchor"></div>
            <div class="col-md-3 team-sd sl">
                <div id="sticky">
                <div class="service-box-sidebar">
                    <ul id="menu-sidebar" class="menu-sidebar">

                        <style>
                            .sbs {
                                color: #002e5b;
                                text-decoration: none !important;
                                border-left: 5px solid #e30016 !important;
                                display: inline-block;
                                padding: 14px 0 14px 18px;
                                transition: all .3s ease;
                            }
                        </style>





                        
                            
                            <li class="sidebar-menu-item">
                                <a href="/services/brand-protection/brand-protection" class="">Brand Protection</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/brand-protection/online-monitoring" class="">Online Monitoring </a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/brand-protection/enforcement-actions-offline" class="sbs">Enforcement actions (Offline)</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/brand-protection/anti-piracy-and-anti-counterfeiting" class="">Anti-Piracy &amp; Anti-counterfeiting</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/brand-protection/online-reputation-management" class="">Online Reputation Management</a>
                            </li>

                            
                        
                    </ul>
                </div>

                <div class="sidebar-card">
                    <div class="sidebar-card-title"> Reach out to us
                    </div>
                    <p><span>Contact us at the Netrika office nearest to you or submit a business inquiry online.</span></p>
                    <div class="sidebar-btn-box">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="sidebar-btn">
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
                    <div class="sidebar-testimonial slider slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 750px; transform: translate3d(-500px, 0px, 0px);"><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="testimonialsidebar"><p class="hb">Organisations are trying to be proactive with their monitoring to spot suspicious people and packages before crimes occur.
</p>
                                    </div>
                                    <div class="testimonialsidebar-info">
                                        <div class="testimonialsidebar-image"><img src="/img/team/quotes/sanjay-kaushik-50x50.jpg" width="50" height="50"></div>
                                        <div class="testimonialsidebar-text">
                                            <div class="sidebarname hb">Sanjay Kaushik </div>
                                            <div class="sidebarcompany hb">
                                                CFE, CII, FCIISCM, CATS, CCPS, CFAP Managing Director
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <div class="testimonialsidebar"><p class="hb">Counterfeiting problem is spreading fast . Online pharmacies mention about genuine products. It’s  sad that genuine products are shown as a differentiator.
</p>
                                    </div>
                                    <div class="testimonialsidebar-info">
                                        <div class="testimonialsidebar-image"><img src="/img/team/quotes/Dhruv-50x50.jpg" width="50" height="50"></div>
                                        <div class="testimonialsidebar-text">
                                            <div class="sidebarname hb">Dhruv Maingi</div>
                                            <div class="sidebarcompany hb">
                                                ICPS Co-Founder &amp; Director-IPR
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 250px;"><div><div style="width: 100%; display: inline-block;">
                                    <div class="testimonialsidebar"><p class="hb">Counterfeit of Products is a real threat to the country and we at Netrika are fighting it with all our might to make our country a better place to live in.</p>
                                    </div>
                                    <div class="testimonialsidebar-info">
                                        <div class="testimonialsidebar-image"><img src="/img/team/quotes/pravin-parab-50x50.jpg" width="50" height="50"></div>
                                        <div class="testimonialsidebar-text">
                                            <div class="sidebarname hb">Pravin Parab</div>
                                            <div class="sidebarcompany hb">
                                                CFE Director-Operations, Western Region and Southern Region
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div></div></div>
                </div>


                
                <div class="sidebar-casestudies-box">
                    <h6 class="sidebar-custom-title">Casebook
                    </h6>
                    <div class="kkb">
                        <p class="hnc"></p>
                    </div>
                   <div class="cbv">
                       <a href="/casebook">View All &gt;</a>
                   </div>

                    <div class="sidebar-cases slider slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3750px; transform: translate3d(-250px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/counterfeit-glucometer-discovered-in-ahmedabad" tabindex="-1"><img src="/img/case-studies/counterfeit-glucometer-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/counterfeit-glucometer-discovered-in-ahmedabad" tabindex="-1">Counterfeit Glucometer Discovered in Ahmedabad
                                        </a></h5>
                                    <div class="sidebarpost-summary">The counterfeit products (Glucometer and Test Strips) of a prominent pharmaceutical company were bei...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 250px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/apparel-counterfeiting" tabindex="0"><img src="/img/case-studies/apparel-counterfeiting-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/apparel-counterfeiting" tabindex="0">Apparel Counterfeiting
                                        </a></h5>
                                    <div class="sidebarpost-summary">Our team got informed about three targets located in the same vicinity of Mumbai manufacturing count...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/product-counterfeiting" tabindex="-1"><img src="/img/case-studies/product-counterfeiting-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/product-counterfeiting" tabindex="-1">Product Counterfeiting
                                        </a></h5>
                                    <div class="sidebarpost-summary">The empty bottles of original products (Deodorants &amp; Shampoos) of a renowned manufacturing company w...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/online-fake-jobs-redressal" tabindex="-1"><img src="/img/case-studies/online-fake-jobs-redressal-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/online-fake-jobs-redressal" tabindex="-1">Online Fake Jobs Redressal
                                        </a></h5>
                                    <div class="sidebarpost-summary">A top aviation company was receiving many complaints against an online fake job Online Fake Jobs Red...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/online-product-counterfeiting" tabindex="-1"><img src="/img/case-studies/online-product-counterfeiting-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/online-product-counterfeiting" tabindex="-1">Online Product Counterfeiting
                                        </a></h5>
                                    <div class="sidebarpost-summary">Our team was approached by a leading apparel company for its counterfeits of jeans being sold in hug...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/online-piracy-media-content" tabindex="-1"><img src="/img/case-studies/online-piracy-media-content-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/online-piracy-media-content" tabindex="-1">Online Piracy Media Content
                                        </a></h5>
                                    <div class="sidebarpost-summary">The increase in consumption of online video amid Covid-19 lockdown has led to a massive surge in pir...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/counterfeit-product-reporting-becomes-easy" tabindex="-1"><img src="/img/case-studies/counterfeit-product-reporting-becomes-easy-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/counterfeit-product-reporting-becomes-easy" tabindex="-1">Counterfeit Product Reporting Becomes Easy
                                        </a></h5>
                                    <div class="sidebarpost-summary">Counterfeit Product Reporting becomes Easy! Did you receive a fake product? Report Fake is one such...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/counterfeit-glucometer-discovered-in-ahmedabad" tabindex="-1"><img src="/img/case-studies/counterfeit-glucometer-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/counterfeit-glucometer-discovered-in-ahmedabad" tabindex="-1">Counterfeit Glucometer Discovered in Ahmedabad
                                        </a></h5>
                                    <div class="sidebarpost-summary">The counterfeit products (Glucometer and Test Strips) of a prominent pharmaceutical company were bei...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/apparel-counterfeiting" tabindex="-1"><img src="/img/case-studies/apparel-counterfeiting-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/apparel-counterfeiting" tabindex="-1">Apparel Counterfeiting
                                        </a></h5>
                                    <div class="sidebarpost-summary">Our team got informed about three targets located in the same vicinity of Mumbai manufacturing count...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/product-counterfeiting" tabindex="-1"><img src="/img/case-studies/product-counterfeiting-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/product-counterfeiting" tabindex="-1">Product Counterfeiting
                                        </a></h5>
                                    <div class="sidebarpost-summary">The empty bottles of original products (Deodorants &amp; Shampoos) of a renowned manufacturing company w...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/online-fake-jobs-redressal" tabindex="-1"><img src="/img/case-studies/online-fake-jobs-redressal-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/online-fake-jobs-redressal" tabindex="-1">Online Fake Jobs Redressal
                                        </a></h5>
                                    <div class="sidebarpost-summary">A top aviation company was receiving many complaints against an online fake job Online Fake Jobs Red...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/online-product-counterfeiting" tabindex="-1"><img src="/img/case-studies/online-product-counterfeiting-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/online-product-counterfeiting" tabindex="-1">Online Product Counterfeiting
                                        </a></h5>
                                    <div class="sidebarpost-summary">Our team was approached by a leading apparel company for its counterfeits of jeans being sold in hug...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/online-piracy-media-content" tabindex="-1"><img src="/img/case-studies/online-piracy-media-content-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/online-piracy-media-content" tabindex="-1">Online Piracy Media Content
                                        </a></h5>
                                    <div class="sidebarpost-summary">The increase in consumption of online video amid Covid-19 lockdown has led to a massive surge in pir...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/counterfeit-product-reporting-becomes-easy" tabindex="-1"><img src="/img/case-studies/counterfeit-product-reporting-becomes-easy-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/counterfeit-product-reporting-becomes-easy" tabindex="-1">Counterfeit Product Reporting Becomes Easy
                                        </a></h5>
                                    <div class="sidebarpost-summary">Counterfeit Product Reporting becomes Easy! Did you receive a fake product? Report Fake is one such...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/counterfeit-glucometer-discovered-in-ahmedabad" tabindex="-1"><img src="/img/case-studies/counterfeit-glucometer-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/counterfeit-glucometer-discovered-in-ahmedabad" tabindex="-1">Counterfeit Glucometer Discovered in Ahmedabad
                                        </a></h5>
                                    <div class="sidebarpost-summary">The counterfeit products (Glucometer and Test Strips) of a prominent pharmaceutical company were bei...</div></div>
                            </div>
                        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
                </div>

                    

                    
                <div class="sidebar-casestudies-box">
                    <h6 class="sidebar-custom-title">Whitepaper and Surveys
                    </h6>
                    <div class="kkb">
                        <p class="hnc"></p>
                    </div>
                    <div class="cbv">
                        <a href="/white-paper">View All &gt;</a>
                    </div>

                    <div class="sidebar-cases slider slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 250px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 250px;"><div><div style="width: 100%; display: inline-block;">
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#" tabindex="0"><img src="/img/white-paper/garima-thumbnail.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#" tabindex="0">Garima - Sexual Harassment At Workplace </a></h5>

                                       <div class="wpd">
                                           <a href="/white-paper/garima-sexual-harassment-at-workplace" tabindex="0">Download</a>
                                       </div>

                                    </div>
                                </div>
                            </div></div></div></div></div></div>
                </div>

                        
            </div>

        </div>



        </div>
    </div>
</section>

<section class="cta cta2" id="cta">
        <div class="container">
            <div class="row">

                <div class="col-md-12 cta-box">
                    <div class="cta-content">
                        <h3 class="cta-title">Subscribe to our Newsletter</h3>
                    </div>



                    <div class="cta-action">
                    <a href="#" class="custom-all-btn cta-btn" data-toggle="modal" data-target="#exampleModalCentersss">
                    <span>Subscribe</span>
                    <i class="fa fa-chevron-right"></i>
                    </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
	
	<div class="modal fade" id="exampleModalCentersss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content toll-free">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="enquery-contact">
                                <div class="custom_heading">
                                    <h5 style="font-weight:700;color: #ffffff;text-align: left;" class="custom-title2 ct adl-2">Subscribe to our Newsletter</h5><p class="hnc"></p>
                                </div>
                                <form id="quick-enquiry-form" method="post" action="/newsletter" class="quick-enquiry-form" enctype="multipart/form-data">

                                    <input type="hidden" name="_token" value="4F9p6gaGZNAC29OGCu5DiP4rfqGvrAUamVNrSBja">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required="">
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <input id="phone_number" name="phone_number" type="number" class="form-control" placeholder="Phone Number" required="">
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <input id="designation" name="designation" type="text" class="form-control" placeholder="Designation" required="">
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>




                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required="">
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <input id="organisation" name="organisation" type="text" class="form-control" placeholder="Organisation" required="">
                                                    <span class="error" style="display: none;">This field is required</span>
                                                </div>

                                                <div class="input-group">
                                                    <div class="gg-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak" required=""></div>

                                                </div>

                                                <div class="input-group">
                                                    <button style="    margin-top: 0.6rem;" type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
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
	
	<section class="quick-enquiry" id="qef">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="custom_sub_heading">
                    <h5 style="text-align: left;" class="custom-sub-title quick-enquiry-title">Quick Enquiry
                    </h5>
                    <div class="cv custom_heading"><p></p></div>
                </div>
                <form id="quick-enquiry-form" class="quick-enquiry-form">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="input-group">
                                    <input id="name1" name="name" type="text" class="form-control" placeholder="Name*" required="">
                                    <span class="error" id="error-name"></span>
                                </div>
                                
                                    
                                    
                                

                                <div class="input-group">
                                    <input id="organization1" name="organization" type="text" class="form-control" placeholder="Organization Name" required="">
                                    <span class="error" id="error-organization"></span>
                                </div>

                                <div class="input-group">
                                    <input id="phone_number1" name="phone_number" type="number" class="form-control" placeholder="Phone Number*" required="">
                                    <span class="error" id="error-phone_number"></span>
                                </div>

                                <div class="input-group">
                                    <input id="email1" name="email" type="email" class="form-control" placeholder="Email*" required="">
                                    <span class="error" id="error-email"></span>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="input-group">
                                    <select name="service" id="services" class="form-control" required="">
                                        <option value="">Services</option>

                                                                                                                                    <option value="Forensic Investigation">Forensic Investigation</option>
                                                                                            <option value="Due Diligence">Due Diligence</option>
                                                                                            <option value="Information Security">Information Security</option>
                                                                                            <option value="Security &amp; Risk Consulting">Security &amp; Risk Consulting</option>
                                                                                            <option value="Brand Protection">Brand Protection</option>
                                                                                            <option value="Background Checks">Background Checks</option>
                                                                                            <option value="Training and Certifications">Training and Certifications</option>
                                                                                    
                                    </select>
                                    <span class="error" id="error-services"></span>
                                </div>

                                <div class="input-group">
                                    <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject" required="">
                                    <span class="error" id="error-subject"></span>
                                </div>

                                <div class="input-group">
                                    <textarea id="message" name="message" cols="80" rows="5" class="form-control messagebox" placeholder="Your Message *" required=""></textarea>
                                    <span class="error" id="error-message"></span>
                                </div>

                                <div class="input-group" style="margin: 1em 0em;">
                                    <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak&amp;co=aHR0cHM6Ly93d3cubmV0cmlrYS5jb206NDQz&amp;hl=en&amp;v=r8jtf1oixV0IGff4hgB4EzDF&amp;size=normal&amp;cb=xrg1qffbe2h0" width="304" height="78" role="presentation" name="a-qq9xx8qsduga" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" required="required" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>

                                </div>


                                <div class="input-group">

                                    <input id="a_data_value" type="text" name="a_data_value" style="display:none !important" tabindex="-1" autocomplete="off" value="kbees">


                                    <button id="form-submit" type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
                                </div>

                            </div>

                        </div> <!--row ends here-->

                    </div>  <!--form-group ends here-->
                </form>

                <div class="con-thnx" style="display: none;">
                    Successfully Submitted! We'll get back to you later.
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
                    <h3 class="cta-title">Are you Secured?</h3>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModalCenterss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content toll-free">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="enquery-contact">
                            <div class="custom_heading">
                                <h5 style="font-weight:700;color: #ffffff;text-align: left;" class="custom-title2 ct adl-2">Fill The Form</h5><p class="hnc"></p>
                            </div>
                            <form id="quick-enquiry-form" method="post" action="/quick-enquiry" class="quick-enquiry-form" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="4F9p6gaGZNAC29OGCu5DiP4rfqGvrAUamVNrSBja">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required="">
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>

                                            <div class="input-group">
                                                <input id="phone_number" name="phone_number" type="number" class="form-control" placeholder="Phone Number*" required="">
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>

                                            <div class="input-group">
                                                <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject*" required="">
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>




                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required="">
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>

                                            <div class="input-group">
                                                <textarea name="message" cols="80" rows="5" class="form-control messagebox" placeholder="Your Message *" required=""></textarea>
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>


                                            <div style="margin: 0.5em 0em 0em 0em;" class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak&amp;co=aHR0cHM6Ly93d3cubmV0cmlrYS5jb206NDQz&amp;hl=en&amp;v=r8jtf1oixV0IGff4hgB4EzDF&amp;size=normal&amp;cb=vksqghfijahn" width="304" height="78" role="presentation" name="a-3nljj18kix05" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>

                                            </div>

                                            <div class="input-group">

                                                <input type="text" name="a_data_value" style="display:none !important" tabindex="-1" autocomplete="off" value="kbees">



                                                <button style="margin-top: 1.1rem;" type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>
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



<script>
document.getElementsByTagName('meta')["keywords"].content = "Litigation services";
document.getElementsByTagName('meta')["description"].content = "Netrika is a litigation service provider in Singapore & works closely with law enforcement agencies to effectively manage the litigation process.";
document.title = "Litigation Support Services in Singapore | Netrika";
</script>

@endsection