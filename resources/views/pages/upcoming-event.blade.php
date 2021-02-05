
@extends('layout.app')


@section('content')
    <div class="team-banner upcoming-page">
        <p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Upcoming</span> Events</p>
    </div>

    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Upcoming Event</span></a></span>
            </div>
        </div>
    </div>
    <section class="white-paper-page" id="white-paper-page"  style="background-color: #ffffff;">
        <div class="container-fluid">
            <div class="row" style="">
                <div class="col-md-9">

                    <div class="gallery-box1">
                        <div style="padding: 0px;" class="container">


                                <div style="margin-top: 1rem;" class="container">


                                    @if(isset($data['get_upcoming_event']))


                                        @foreach($data['get_upcoming_event'] as $key=>$get_upcoming_event)
                                            <div class="row event-boxs">
                                                <div class="col-md-3"><img src="/img/events/{{$get_upcoming_event->image}}" alt="events icons"></div>
                                                <div class="col-md-6 event-infos cent">
                                                    <div>
                                                        <h2 class="event-infos-title">{{$get_upcoming_event->title}}</h2>

                                                        <p>{{$get_upcoming_event->city}}</p>
                                                        <p>{{$get_upcoming_event->event_date}}</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 cent btn-forue">
                                                    <span class="know-m-btn">Coming Soon</span>
                                                </div>

                                            </div>

                                        @endforeach

                                    @endif
                                    
                                </div>

                            <div style="" class="col-md-12 row button-box-text">


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

                    <div class="sidebar-testimonial-box">
                        <div class="sidebar-testimonial slider">

                            @if(isset($quotes))

                                @foreach($quotes as $key=> $get_quotes)

                                    <div>
                                        <div class="testimonialsidebar"><p class="hb">{{$get_quotes->quotes}}</p>
                                        </div>
                                        <div class="testimonialsidebar-info">
                                            <div class="testimonialsidebar-image"><img src="/img/team/quotes/{{$get_quotes->user_image}}" alt="Director Images" width="50" height="50"></div>
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

                    @if(isset($data['get_photogallery']))

                        <div class="sidebar-casestudies-box">
                            <h6 class="sidebar-custom-title">Photo Gallery
                            </h6>

                            <div class="cbv">
                                <a href="/photogallery">View All ></a>
                            </div>

                            <div class="sidebar-cases slider">

                                @foreach($data['get_photogallery'] as $key=>$get_photogallery)

                                    <div>
                                        <div class="posts-item">
                                            <div class="sidebarpost-image">
                                                <a class="image-gallery" data-fancybox="gallery"  data-caption="{{$get_photogallery->text}}" href="/img/picture-gallery/original/{{$get_photogallery->image}}"><img src="/img/picture-gallery/thumbnail/{{$get_photogallery->thumbnail}}" alt="Gallery Images"></a>
                                            </div>
                                            <div class="sidebarpost-text">
                                                {{--<h5 class="sidebarpost-title"><a href="#">--}}
                                                {{--</a></h5>--}}
                                                <div class="sidebarpost-summary">{{\Illuminate\Support\Str::limit($get_photogallery->text,100)}}</div></div>
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
    <!-- Apply box -->
    {{--<div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
        {{--<div class="modal-dialog modal-dialog-centered modal-lg" role="document">--}}
            {{--<div class="modal-content toll-free">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title" id="exampleModalLongTitle"></h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<div class="enquery-contact">--}}
                                {{--<div class="custom_heading">--}}
                                    {{--<h5 style="font-weight:700;color: #ffffff;text-align: left;" class="custom-title2 ct adl-2">Fill The Form</h5><p class="hnc"></p>--}}
                                {{--</div>--}}
                                {{--<form id="quick-enquiry-form" method="get" action="#" class="quick-enquiry-form">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="input-group">--}}
                                                    {{--<input id="name" name="name" type="text" class="form-control" placeholder="Name*" required>--}}
                                                    {{--<span class="error" style="display: none;">This field is required</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="input-group">--}}
                                                    {{--<input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>--}}
                                                    {{--<span class="error" style="display: none;">This field is required</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="input-group">--}}
                                                    {{--<input id="phone_number" name="phone_number" type="number" class="form-control" placeholder="Phone Number*" required>--}}
                                                    {{--<span class="error" style="display: none;">This field is required</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="input-group">--}}
                                                    {{--<textarea name="message" cols="80" rows="5" class="form-control messagebox" placeholder="Your Message *" required></textarea>--}}
                                                    {{--<span class="error" style="display: none;">This field is required</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="input-group">--}}
                                                    {{--<button style="margin-top: 1.1rem;" type="submit" class="eq-btn">submit <i class="fa fa-chevron-right" style="margin-left: 0.5rem;"></i></button>--}}
                                                {{--</div>--}}


                                            {{--</div>--}}


                                        {{--</div> <!--row ends here-->--}}

                                    {{--</div>  <!--form-group ends here-->--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

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
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Name*" required>
                                        <span class="error"  id="error-name"></span>
                                    </div>
                                    {{--<div class="input-group">--}}
                                    {{--<input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name" required>--}}
                                    {{--<span class="error" style="display: none;">This field is required</span>--}}
                                    {{--</div>--}}

                                    <div class="input-group">
                                        <input id="organization" name="organization" type="text" class="form-control" placeholder="Organization Name" required>
                                        <span class="error"  id="error-organization"></span>
                                    </div>

                                    <div class="input-group">
                                        <input id="phone_number" name="phone_number" type="number" class="form-control" placeholder="Phone Number*" required>
                                        <span class="error"  id="error-phone_number"></span>
                                    </div>

                                    <div class="input-group">
                                        <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>
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
                                            <option value="GDPR Compliance ">GDPR Compliance </option>

                                        </select>
                                        <span class="error" id="error-services"></span>
                                    </div>

                                    <div class="input-group">
                                        <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject" required>
                                        <span class="error"  id="error-subject"></span>
                                    </div>

                                    <div class="input-group">
                                        <textarea id="message" name="message" cols="80" rows="5" class="form-control messagebox" placeholder="Your Message *" required></textarea>
                                        <span class="error" id="error-message"></span>
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


        $('#form-submit').on('click',function (e) {

            e.preventDefault();

            var name = $("#name").val();
            var organization = $("#organization").val();
            var phone_number = $("#phone_number").val();
            var email = $("#email").val();
            var services = $("#services").val();
            var subject = $("#subject").val();
            var message = $("#message").val();

            // alert(name);

            $.ajax({
                type:'POST',
                url:"{{ route('services') }}",
                data:{name:name, email:email, phone_number:phone_number, message:message,services:services,subject:subject,organization:organization,"_token": "{{ csrf_token() }}"},
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        window.location.replace("/thank-you");

                    }else{
                        console.log(data);

                        if (data.error.message){
                            $('#error-message').css('color','red').html(data.error.message[0]);
                        }else{
                            $('#error-message').html('');
                        }
                        if (data.error.phone_number){
                            $('#error-phone_number').css('color','red').html(data.error.phone_number[0]);
                        }else{
                            $('#error-phone_number').html('');
                        }

                        if (data.error.email){
                            $('#error-email').css('color','red').html(data.error.email[0]);
                        }else{
                            $('#error-email').html('');
                        }

                        if (data.error.name){
                            $('#error-name').css('color','red').html(data.error.name[0]);
                        }else{
                            $('#error-name').html('');
                        }

                        if (data.error.services){
                            $('#error-services').css('color','red').html(data.error.services[0]);
                        }else{
                            $('#error-services').html('');
                        }

                        if (data.error.subject){
                            $('#error-subject').css('color','red').html(data.error.subject[0]);
                        }else{
                            $('#error-subject').html('');
                        }

                        if (data.error.organization){
                            $('#error-organization').css('color','red').html(data.error.organization[0]);
                        }else{
                            $('#error-organization').html('');
                        }

                    }
                }
            });

        });

    </script>

    <script type="text/javascript">

        $(".sidebar-testimonial").slick({
            dots: false,
            prevArrow: false,
            nextArrow: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay:true
        });

    </script>


    <script type="text/javascript">

        $(".sidebar-cases").slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });

    </script>
	
		
<script>
document.getElementsByTagName('meta')["keywords"].content = "Upcoming Events";
document.getElementsByTagName('meta')["description"].content = "Check out all the upcoming events organised by Netrika consulting.";
document.title = "Upcoming Events | Netrika";
</script>


@endsection
