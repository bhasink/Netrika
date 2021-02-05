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
            background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/services/banner/fraud-risk-assessment-1480x700.jpg');
            background-size: 100% 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
        }

        @media  screen and (max-width: 600px) {
            .team-banner{
                background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/img/services/banner/res/fraud-risk-assessment-600x500.jpg') !important;
                background-size: cover;
            }
            .services-b{
                margin-left: 0px;
            }
        }
    </style>
	
<div class="team-banner service-banner">

        
        <p style="background-color:rgba(0, 46, 91, 0);" class="scrollanimation animated adl-2 bounceIn"><span style="background-color: rgba(0, 46, 91, 0.5);padding: 0px 10px;"> <span style="color: rgb(253, 228, 40);">Corporate Investigation</span></p>

    </div>
	
<div class="page_title">
    <div class="container-fluid">
        <div class="breadcrumbs services-b">
            <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
            <span><a href="#"><span property="name">Services</span></a></span>
            <span><i class="fa fa-angle-right"></i></span>
            <span><a href="forensic-investigation"><span>Forensic Investigation</span></a></span>
            <span><i class="fa fa-angle-right"></i></span><span>
            <span>Fraud risk assessment / Fraud Risk Management</span></span>
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
                                                            <img src="/img/team/page/col-sanganagouda-dhawalgi.jpg" alt="Sanjay Kaushik">
                                                        </div>

                                                        <div class="info">
                                                            <span><b>Col Sanganagouda Dhawalgi </b></span>
                                                            <p>Executive Director-FI</p>
                                                            <p>CFE </p>

                                                        </div>
                                                        <div class="footer-box ">
                                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>+91-974-223-3717</span>
                                                            <a href="mailto:sanganagouda.dhawalgi@netrika.com"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                            <a href="/team-profile/Col Sanganagouda Dhawalgi.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
                                                        </div>
                                                    </div>

                                                </div>

                                            
                                                <div class="mainbox">
                                                    <div class="cards">

                                                        <div class="img-box">
                                                            <img src="/img/team/page/gaurav_jain-250x250.jpg" alt="Sanjay Kaushik">
                                                        </div>

                                                        <div class="info">
                                                            <span><b>Gaurav Jain</b></span>
                                                            <p>Associate Director - Forensic Investigations and Risk Management</p>
                                                            <p>CFE</p>

                                                        </div>
                                                        <div class="footer-box ">
                                                            <span class="mob"><i class="fa fa-phone" aria-hidden="true" style="margin-right: 5px;color:#e62336;"></i>+91-124-488-3000</span>
                                                            <a href="mailto:gaurav.jain@netrika.com"> <span style="float:right;margin-left: 0.5rem;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></a>
                                                            <a href="/team-profile/gaurav-jain-23.pdf">       <span style="float:right"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a>
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

                                <h1 style="text-align: center;" class="custom-title"><strong>Corporate Investigation</strong></h1><div class="custom_heading"><p></p></div>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>PROCEEDING WITH A CORRECT APPROACH </strong></h2><div class="cv custom_heading"><p></p></div>
<p>Due Diligence – is also for business partners, Senior hires, investors like by angel investors/venture capitalists/ institutional investors/ banks, etc World Health Organization seek for strategic investments or World Health Organization want to amass inorganic growth. The due diligence check is generally done to grasp the moral behaviour, financials, criminal background, lawsuits, media news, etc done through desktop searches through paid websites and publically accessible info. additionally, web site checks ar allotted through market intelligence groups. Netrika Consulting Asian nation Pvt Ltd has consultants World Health Organization facilitate customers during this domain with their experience.
</p>
<p>&nbsp;</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>KNOW IT BEFORE YOU GET INTO IT </strong></h2><div class="cv custom_heading"><p></p></div>
<p>Having whistleblowers’ line for the staff and also the business partners is extremely necessary for providing a channel to report unethical practices. Additionally, to the structure culture, it's important to supply AN avenue to the staff and also the business partners for news. Netrika is well poised to manage forensic investigation for the organizations severally and investigate these complaints. Typically, these complaints pertain to harassment, conflict of interest cases, kickbacks, undue favouritism, etc.
</p>
<p>&nbsp;</p>
<ul>
<li>Determine, assess, and successfully mitigate key fraud risks</li>
<li>Identify and prioritize areas of risk</li>
<li>Devise and establish an appropriate anti-fraud management plan</li>
</ul>
<p>&nbsp;</p>
<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>FORENSIC INVESTIGATION AND PROOF REVIEW</strong></h2><div class="cv custom_heading"><p></p></div>
<p>E-discovery is a very important method of gathering the proof might or not it's in support of rhetorical investigations and disputes. Netrika has the requisite experience for an equivalent forensic investigation. we have a tendency to ar within the method of fitting a laboratory for all rhetorical technology services together with e-discovery.</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>REVIEW, LEARN AND GROW</strong></h2><div class="cv custom_heading"><p></p></div>
<p>Proactively, corporations perpetually have to be compelled to review and improve their policies and processes regarding security, ethics and compliance, harassment, ABC, etc, so as to stay pace with the regulative and market wants. This method reviews are done to assess the gaps which may be exploited by potential fraudsters to their advantage. Netrika’s team of multifunctional consultants facilitate forensic investigation and assessment whereas applying their information gained through such add the business.</p>
<p>&nbsp;</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>TRACING ASSETS FOR FORENSIC INVESTIGATION</strong></h2><div class="cv custom_heading"><p></p></div>
<p>Banks, monetary establishments, investors, venture capitalists would like to facilitate in tracing assets once their investment/loans go dangerous and that they have to be compelled to notice assets to recover their capital investments. it's going to be against individuals/companies. Netrika has the requisite experience to help assets tracing for shoppers either directly or through their legal advisors.</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>SKIP TRACING</strong></h2><div class="cv custom_heading"><p></p></div>
<p>Companies generally wish to keep track of the promoters and key personnel of tiny brands World Health Organization ar providing robust competition in key markets. They might be a contestant to a longtime whole team at Netrika works shortly with CXO’s to stay close eye. Because the market gets a lot of competitive, many corporations ar rigorous such services.</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>PROOF SEARCHING</strong></h2><div class="cv custom_heading"><p></p></div>
<p>Companies are usually curious about testing if their processes are purposeful or not and often, they have to report this demand to the regulators additionally. this may be in deep trouble retail sector, monetary establishments, services/product corporations. Netrika will assist the consumer in finishing up this important perform.</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>OUTSOURCING OF RESOURCES</strong></h2><div class="cv custom_heading"><p></p></div>
<p>With the big pool of skilled proficient resources with varied background from Master in Business Administration, CA, CFEs, Personnel with Defence & Legal background, Charted Accountants, CFEs, etc, Netrika Consulting will facilitate organisations World Health Organization wouldn't wish to rent resources directly on their payroll for brief to long-run amount however there's a requirement of proficient human resources for tasks associated with governance, risk, compliance, audit & investigation management. edges in such arrangements ar various like price improvement thanks to no legal liabilities like PF, ESI, Insurance etc, no headache of screening an outsized range of candidates, recruiting, coaching and terminating contracts, and in a particular glorious pool of qualified resources prepared at organization disposal all the days.</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>FORENSIC INVESTIGATION</strong></h2><div class="cv custom_heading"><p></p></div>
<p>Often the corporate struggles to seek out the wrongdoer thanks to lack of wherewithal to try and do this. we have a tendency to may facilitate them during this regard through proof gathering through the measures like a review of policies, procedures, imaging of laptops/desktops and review of emails/documents dealing testing, desktop review, market intelligence through neighbourhood canvas, etc and eventually interview the target use.</p>

<h2 style="color: rgb(0, 46, 91); font-size: 20px;"><strong>Netrika’s key services are:</strong></h2><div class="cv custom_heading"><p></p></div>
<ul>
<li>Fraud risk assessment</li>
<li>Design the Fraud Risk frameworks according to the best global practices</li>
<li>Help businesses in the matters related to corporate fraud allegations, kickbacks, financial mismanagement and provide practical solution for fraud risk management</li>
<li>Compliance assessments on fraud risk management and prevention</li>
<li>Fraud risk management workshops and fraud prevention customised training for corporate executives.</li>
</ul>
<p>&nbsp;</p>

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
                                <a href="/services/forensic-investigation/forensic-investigation" class="">Forensic Investigations</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/whistle-blower-line-management" class="">Whistle blower line management</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/fraud-risk-assessment-fraud-risk-management" class="sbs">Fraud risk assessment / Fraud Risk Management</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/anti-bribery-and-corruption–investigation" class="">Anti-bribery &amp; Corruption </a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/mystery-shopping" class="">Mystery shopping</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/anti-money-laundering-aml-and-know-your-customers-kyc" class="">Anti- Money Laundering (AML) and Know Your Customers (KYC)</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/kisan-credit-card-frauds" class="">Kisan Credit card Frauds</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/e-discovery-and-cyber-forensics" class="">E-discovery &amp; Cyber Forensics</a>
                            </li>

                            
                            <li class="sidebar-menu-item">
                                <a href="/services/forensic-investigation/dispute-advisory" class="">Dispute advisory</a>
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
                                    <div class="testimonialsidebar"><p class="hb">We at Netrika aim to be in the top 5 in times to come soon, while maintaining cost competitiveness and quality of the work delivery.</p>
                                    </div>
                                    <div class="testimonialsidebar-info">
                                        <div class="testimonialsidebar-image"><img src="/img/team/quotes/Sanganagouda-dhawalgi-50x50.jpg" width="50" height="50"></div>
                                        <div class="testimonialsidebar-text">
                                            <div class="sidebarname hb">Col Sanganagouda Dhawalgi </div>
                                            <div class="sidebarcompany hb">
                                                CFE Executive Director-FI
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 250px;"><div><div style="width: 100%; display: inline-block;">
                                    <div class="testimonialsidebar"><p class="hb">Enabling organizations to focus on core competencies &amp; manage the risks with more confidence, leaving operational risk management challenges to us.</p>
                                    </div>
                                    <div class="testimonialsidebar-info">
                                        <div class="testimonialsidebar-image"><img src="/img/team/quotes/gaurav_jain-50x50.jpg" width="50" height="50"></div>
                                        <div class="testimonialsidebar-text">
                                            <div class="sidebarname hb">Gaurav Jain</div>
                                            <div class="sidebarcompany hb">
                                                Associate Director 
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
                                    <a href="/casebook/skip-tracing" tabindex="-1"><img src="/img/case-studies/Asset-&amp;-Skip-Tracing-Case-Study-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/skip-tracing" tabindex="-1">Skip Tracing
                                        </a></h5>
                                    <div class="sidebarpost-summary">The client partnered with Netrika Consulting for conducting inquiries on one of its distributors and...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 250px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/real-estate-ethics-concern-addressed" tabindex="0"><img src="/img/case-studies/real-estate-ethics-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/real-estate-ethics-concern-addressed" tabindex="0">Real Estate Ethics Concern Addressed
                                        </a></h5>
                                    <div class="sidebarpost-summary">A global real estate company received a complaint against a senior management employee. The complain...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/dispute-resolved-after-forensic-study" tabindex="-1"><img src="/img/case-studies/dispute-resolved-after-forensic-study-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/dispute-resolved-after-forensic-study" tabindex="-1">Dispute resolved after forensic study
                                        </a></h5>
                                    <div class="sidebarpost-summary">A high profile executive was applying for a leadership role in a company. The company assigned Netri...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/forensic-accounting-leads-to-improved-business-process" tabindex="-1"><img src="/img/case-studies/forensic-accounting-leads-to-improved-business-process-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/forensic-accounting-leads-to-improved-business-process" tabindex="-1">Forensic Accounting leads to improved business process
                                        </a></h5>
                                    <div class="sidebarpost-summary">Netrika Consulting was retained by a company to carry out forensic accounting of fabrication work do...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/forensic-audit-that-capped-leakage" tabindex="-1"><img src="/img/case-studies/forensic-audit-that-capped-leakage-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/forensic-audit-that-capped-leakage" tabindex="-1">Forensic audit that capped leakage
                                        </a></h5>
                                    <div class="sidebarpost-summary">A wire manufacturing company contacted us to carry out forensic audit of its manufacturing plant. It...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/asset-tracing" tabindex="-1"><img src="/img/case-studies/asset-tracing-thumbnail.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/asset-tracing" tabindex="-1">Asset Tracing
                                        </a></h5>
                                    <div class="sidebarpost-summary">The client partnered with Netrika Consulting for conducting inquiries on one of its distributors and...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/mystery-shopping" tabindex="-1"><img src="/img/case-studies/Mystery-Shopping-Case-Study-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/mystery-shopping" tabindex="-1">Mystery Shopping
                                        </a></h5>
                                    <div class="sidebarpost-summary">Banking institution hires Netrika Consulting as a Mystery Shopping agency to measure the quality of...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/skip-tracing" tabindex="-1"><img src="/img/case-studies/Asset-&amp;-Skip-Tracing-Case-Study-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/skip-tracing" tabindex="-1">Skip Tracing
                                        </a></h5>
                                    <div class="sidebarpost-summary">The client partnered with Netrika Consulting for conducting inquiries on one of its distributors and...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/real-estate-ethics-concern-addressed" tabindex="-1"><img src="/img/case-studies/real-estate-ethics-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/real-estate-ethics-concern-addressed" tabindex="-1">Real Estate Ethics Concern Addressed
                                        </a></h5>
                                    <div class="sidebarpost-summary">A global real estate company received a complaint against a senior management employee. The complain...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/dispute-resolved-after-forensic-study" tabindex="-1"><img src="/img/case-studies/dispute-resolved-after-forensic-study-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/dispute-resolved-after-forensic-study" tabindex="-1">Dispute resolved after forensic study
                                        </a></h5>
                                    <div class="sidebarpost-summary">A high profile executive was applying for a leadership role in a company. The company assigned Netri...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/forensic-accounting-leads-to-improved-business-process" tabindex="-1"><img src="/img/case-studies/forensic-accounting-leads-to-improved-business-process-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/forensic-accounting-leads-to-improved-business-process" tabindex="-1">Forensic Accounting leads to improved business process
                                        </a></h5>
                                    <div class="sidebarpost-summary">Netrika Consulting was retained by a company to carry out forensic accounting of fabrication work do...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/forensic-audit-that-capped-leakage" tabindex="-1"><img src="/img/case-studies/forensic-audit-that-capped-leakage-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/forensic-audit-that-capped-leakage" tabindex="-1">Forensic audit that capped leakage
                                        </a></h5>
                                    <div class="sidebarpost-summary">A wire manufacturing company contacted us to carry out forensic audit of its manufacturing plant. It...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/asset-tracing" tabindex="-1"><img src="/img/case-studies/asset-tracing-thumbnail.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/asset-tracing" tabindex="-1">Asset Tracing
                                        </a></h5>
                                    <div class="sidebarpost-summary">The client partnered with Netrika Consulting for conducting inquiries on one of its distributors and...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/mystery-shopping" tabindex="-1"><img src="/img/case-studies/Mystery-Shopping-Case-Study-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/mystery-shopping" tabindex="-1">Mystery Shopping
                                        </a></h5>
                                    <div class="sidebarpost-summary">Banking institution hires Netrika Consulting as a Mystery Shopping agency to measure the quality of...</div></div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                            <div class="posts-item">
                                <div class="sidebarpost-image">
                                    <a href="/casebook/skip-tracing" tabindex="-1"><img src="/img/case-studies/Asset-&amp;-Skip-Tracing-Case-Study-thumb.jpg"></a>
                                </div>
                                <div class="sidebarpost-text">
                                    <h5 class="sidebarpost-title"><a href="/casebook/skip-tracing" tabindex="-1">Skip Tracing
                                        </a></h5>
                                    <div class="sidebarpost-summary">The client partnered with Netrika Consulting for conducting inquiries on one of its distributors and...</div></div>
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

                    <div class="sidebar-cases slider slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1250px; transform: translate3d(-250px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#" tabindex="-1"><img src="/img/white-paper/garima-thumbnail.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#" tabindex="-1">Garima - Sexual Harassment At Workplace </a></h5>

                                       <div class="wpd">
                                           <a href="/white-paper/garima-sexual-harassment-at-workplace" tabindex="-1">Download</a>
                                       </div>

                                    </div>
                                </div>
                            </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 250px;"><div><div style="width: 100%; display: inline-block;">
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#" tabindex="0"><img src="/img/white-paper/compendium-edition-IV-thumb.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#" tabindex="0">Compendium Edition IV</a></h5>

                                       <div class="wpd">
                                           <a href="/white-paper/compendium-IV" tabindex="0">Download</a>
                                       </div>

                                    </div>
                                </div>
                            </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#" tabindex="-1"><img src="/img/white-paper/garima-thumbnail.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#" tabindex="-1">Garima - Sexual Harassment At Workplace </a></h5>

                                       <div class="wpd">
                                           <a href="/white-paper/garima-sexual-harassment-at-workplace" tabindex="-1">Download</a>
                                       </div>

                                    </div>
                                </div>
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#" tabindex="-1"><img src="/img/white-paper/compendium-edition-IV-thumb.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#" tabindex="-1">Compendium Edition IV</a></h5>

                                       <div class="wpd">
                                           <a href="/white-paper/compendium-IV" tabindex="-1">Download</a>
                                       </div>

                                    </div>
                                </div>
                            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 250px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                <div class="posts-item">
                                    <div class="sidebarpost-image">
                                        <a href="#" tabindex="-1"><img src="/img/white-paper/garima-thumbnail.jpg"></a>
                                    </div>
                                    <div class="sidebarpost-text">
                                        <h5 class="sidebarpost-title"><a href="#" tabindex="-1">Garima - Sexual Harassment At Workplace </a></h5>

                                       <div class="wpd">
                                           <a href="/white-paper/garima-sexual-harassment-at-workplace" tabindex="-1">Download</a>
                                       </div>

                                    </div>
                                </div>
                            </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
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

                                    <input type="hidden" name="_token" value="Gn5qrjXeuFip1LxihQHeFx0Q5zVT2FToWatfBNgU">
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
                                                    <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak" required=""><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak&amp;co=aHR0cHM6Ly93d3cubmV0cmlrYS5jb206NDQz&amp;hl=en&amp;v=qc5B-qjP0QEimFYUxcpWJy5B&amp;size=normal&amp;cb=5n1qpkym13hn" width="304" height="78" role="presentation" name="a-l5z82qlohox" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" required="required" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>

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
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required="">
                                    <span class="error" id="error-name"></span>
                                </div>
                                
                                    
                                    
                                

                                <div class="input-group">
                                    <input id="organization" name="organization" type="text" class="form-control" placeholder="Organization Name" required="">
                                    <span class="error" id="error-organization"></span>
                                </div>

                                <div class="input-group">
                                    <input id="phone_number" name="phone_number" type="number" class="form-control" placeholder="Phone Number*" required="">
                                    <span class="error" id="error-phone_number"></span>
                                </div>

                                <div class="input-group">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required="">
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
                                    <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak&amp;co=aHR0cHM6Ly93d3cubmV0cmlrYS5jb206NDQz&amp;hl=en&amp;v=qc5B-qjP0QEimFYUxcpWJy5B&amp;size=normal&amp;cb=2gu8yawixshn" width="304" height="78" role="presentation" name="a-r94ygss6yxvq" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>

                                </div>


                                <div class="input-group">
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
                    <h3 class="cta-title">Be Aware of Fraudsters, Employees and Business Associates</h3>
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

                                <input type="hidden" name="_token" value="Gn5qrjXeuFip1LxihQHeFx0Q5zVT2FToWatfBNgU">
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
                                                <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak&amp;co=aHR0cHM6Ly93d3cubmV0cmlrYS5jb206NDQz&amp;hl=en&amp;v=qc5B-qjP0QEimFYUxcpWJy5B&amp;size=normal&amp;cb=u03z2vxqaju3" width="304" height="78" role="presentation" name="a-u52mi4lggvtw" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>

                                            </div>

                                            <div class="input-group">
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
document.getElementsByTagName('meta')["keywords"].content = "Forensic Investigation";
document.getElementsByTagName('meta')["description"].content = "Netrika’s provides forensic investigation services in UK. Netrika has a team of well poised forensic investigator experts to manage forensic investigation for the organizations.";
document.title = "Forensic Investigation Services in UK | Forensic Services | Netrika";
</script>

@endsection