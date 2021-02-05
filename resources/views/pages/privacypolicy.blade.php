
@extends('layout.app')


@section('content')
    <div class="team-banner privacy-page">
        <p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Privacy</span> Policy</p>
    </div>

    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Privacy Policy</span></a></span>
            </div>
        </div>
    </div>
    <section class="pp-page" id="pp-page"  style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row" style="">
                <div class="col-md-12">
                    <h1>Scope of this Policy</h1>
                    <div class="cv custom_heading"><p></p></div>
                    <p>Netrika Consulting and Investigations, Pvt Ltd. (“Netrika”) has created this privacy policy in order to describe how we collect, use, maintain, share and protect your personal information when you use our website, https://www.netrika.com (hereinafter “Website” or “Site”) in connection with our employment screening services, Fraud risk management services, investigations, Brand Protection & IPR, Information Security, Security & Risk Consulting and Training & Certifications . This privacy policy applies to information collected when you visit our Website. It does not apply to information collected in any other way, including information collected offline and information collected through our client portal. Our Website is not directed at children under the age of 13.</p>
            <h1>Changes to this Policy</h1>
                    <div class="cv custom_heading"><p></p></div>
                    <p>Netrika may revise this privacy policy from time to time. If we make material changes, we will notify you by posting a notice on our Website.</p>
                    <h1>Information Collection on our Website</h1>
                    <div class="cv custom_heading"><p></p></div>
                    <p>Netrika strives to limit its collection of personal information to that necessary for the offering and administration of our services. Our Site collects the following types of information when you visit:

                        Personally identifying information; and,
                        Non-personally identifiable information.
                    </p>
                    <h1>
                        Personally Identifiable Information
                    </h1>
                    <div class="cv custom_heading"><p></p></div>
                    <p>Personally identifying information (PII) is information that can identify you, such as your name and address. It does not include anonymized, aggregate or statistical information. Based on your relationship with us, you may be asked to provide certain PII as described below. If certain information is requested but not mandatory, Netrika will identify which information is required.

                        Online questions or requests. When you are requesting materials or information from Netrika, we may collect your name, job title, address, email address, phone number and other PII, as well as professional interests and the reasons why you are requesting the Netrika services or products.
                        Job applicants. When you apply for employment with Netrika we will collect your name, email address, country of residence, physical address, cell phone number and any information you include in your resume which you upload through the Site.
                        Client Portal Login. When you use the client log-in portal for background checks, drug testing, or electronic I-9 completion you will be sent to our vendors’ system and webpage where they will collect login information such as account, username and/or password in order to access your account and perform the requested services.
                        Blog. When you subscribe to our blog we will collect your email address.</p>
                    <h1>Information Use</h1>
                    <div class="cv custom_heading"><p></p></div>
                    <p>Personally identifying information collected through our Site may be used to:

                        To respond to your inquiries, process requests or otherwise correspond with you regarding employment, programs or services;
                        Enroll you if you signed up to receive Netrika updates, free subscriptions or blog postings; and
                        Provide you with marketing information about Netrika’s services and products.</p>
            </div>
            </div>
        </div>
    </section>

    <section class="cta" id="cta">
        <div class="container-fuid">
            <div class="row">

                <h5 class="cta-title"> Achieving Excellence with A Global Vision
                </h5>
                
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
