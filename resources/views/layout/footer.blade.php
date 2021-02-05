<div class="modal fade" id="exampleModalCenterss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content toll-free">
            <div class="modal-header">
                {{--<h5 class="modal-title" id="exampleModalLongTitle"></h5>--}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
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

                                @csrf

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required>
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>

                                            <div class="input-group">
                                                <input id="phone_number" name="phone_number" type="text" pattern="[1-9]{1}[0-9]{9}" class="form-control" placeholder="Phone Number*" required>
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>

                                            <div class="input-group">
                                                <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject*" required>
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>




                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>

                                            <div class="input-group">
                                                <textarea name="message" cols="80" rows="5" class="form-control messagebox" placeholder="Your Message *" required></textarea>
                                                <span class="error" style="display: none;">This field is required</span>
                                            </div>


                                            <div style="margin: 0.5em 0em 0em 0em;"  class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6LdpZ9YZAAAAAFoMwezC9y3T_dXnF5gELd7kW4ak"></div>

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



<footer>
    <div class="footer-container">
        <div class="container">
            <div class="visible-md visible-lg hidden-xs hidden-sm">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="custom_html-3" class="widget_text widget widget_custom_html">
                            <h4 class="widget_title no_stripe ">Useful Links</h4>
                            <p class="wtp"></p>
                            <div class="textwidget custom-html-widget">
                                <p style="
    padding-top: 0px;"><br>
                                    <a href="/who-we-are/">About Us</a>
                                </p>
                                {{--<p>--}}
                                    {{--<a href="/news-gallery/">Media</a>--}}
                                {{--</p>--}}
                                <p>
                                    <a href="/newsroom/">Newsroom</a>
                                </p>
                                <p>
                                    <a href="/team">Key Experts</a>
                                </p>
                                <p>
                                    <a href="/work-with-us/">Career</a>
                                </p>
                                <p>
                                    <a href="/white-paper">Whitepaper and Surveys</a>
                                </p>

                            </div>
                        </section>                                        </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="custom_html-2" class="widget_text widget widget_custom_html"><h4 class="widget_title no_stripe">Services</h4><p class="wtp"></p><div class="textwidget custom-html-widget"><p style="
    padding-top: 0px;"><br>
                                    <a href="/services/forensic-investigation/forensic-investigation">Forensic Investigations</a>
                                </p>
                                <p>
                                    <a href="/services/due-diligence/due-diligence">Due Diligence</a>
                                </p>
                                <p>
                                    <a href="/services/information-security/information-security">Information Security</a>
                                </p>

                                <p>
                                    <a href="/services/information-security/gdpr-compliance">GDPR Compliance</a>
                                </p>
                                
                                <p>
                                    <a href="/services/security-and-risk-consulting/security-and-risk-consulting">Security & Risk Consulting</a>
                                </p>
                                <p>
                                    <a href="/services/brand-protection/brand-protection">Brand Protection</a>

                                <p>
                                <p>
                                    <a href="/services/background-checks/background-checks">Background Checks</a>

                                <p>
                                <p>
                                    <a href="/coming-soon">Training and Certifications</a>


                            </div>
                        </section>                                        </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="contacts-2" class="widget widget_contacts">
                            <h4 class="widget_title no_stripe">Get in Touch</h4><p class="wtp"></p><br>
                            <ul class="stm_list-duty heading-font"><li class="widget_contacts_address"><div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div><div class="text">Plot no.-2, Industrial Estate,
                                        Udyog Vihar, Phase – IV,
                                        Gurugram – 122015,
                                        Haryana, India.</div></li>
                            </ul>
                            <ul class="stm_list-duty heading-font"><li class="widget_contacts_address"><div class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                    <div class="text"><a href="tel:1800 121 300000">Toll Free: 1800 121 300000</a></div></li></ul>
                            <ul class="stm_list-duty heading-font"><li class="widget_contacts_address"><div class="icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i></div><div class="text"><a href="tel:+91 124 488 3000">Landline: +91 124 488 3000</a></div></li></ul>
                            <ul class="stm_list-duty heading-font"><li class="widget_contacts_address"><div class="icon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i></div><div class="text"><a href="mailto:info@netrika.com">info@netrika.com</a></div></li></ul>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="socials-3" class="widget widget_socials"><h4 class="widget_title no_stripe">Social Network</h4><p class="wtp"></p><div class="socials_widget_wrapper socials"><br>
                                <ul class="widget_socials list-unstyled">				<li>
                                        <a href="https://www.facebook.com/Netrika-Consulting-India-Pvt-Ltd-1451824638362515/">
                                            <i class="fa fa-facebook" aria-hidden="true" alt="facebook Icon"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/Netrika_PvtLtd">
                                            <i class="fa fa-twitter" aria-hidden="true" alt="Twitter Icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/netrika-consulting-india-pvt-ltd/">
                                            <i class="fa fa-linkedin" aria-hidden="true" alt="Linkedin Icon"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCdsATq18jtz0UQUi3R4b7Cg">
                                            <i class="fa fa-youtube-play" aria-hidden="true" alt="Youtube Icon"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </section>
                        <section id="search-4" class="widget widget_search">

                            <a href="/payu" target="_blank">
                                <img src="{{asset('/img/payu-biz-logo.png')}}" alt="Payu Biz Icon">
                            </a>
                            
                            
                            <form style="display: none;" method="get" class="search-form" action="#">
                                <input type="search" class="form-control" placeholder="Search..." value="" name="s">
                                <button class="footer-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form></section>                                        </div>
                </div>
                <!--row ends here-->
            </div>

        </div>
        <!--container ends here-->
    </div>



    <div class="row copyright">
        <div class="col-md-12">
            <div class="copyright-text">
                <span class="tc-footer-left"><a href="/privacy-policy">Privacy Policy</a></span>
                <br>
                <span class="tc-footer-right">Copyright © 2020 Netrika All Rights Reserved.<span>                                                                   </span></span></div>
        </div>
    </div>
    <!--row ends here-->
</footer>