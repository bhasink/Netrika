
@extends('layout.app')


@section('content')

    <style>
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important;
        }

        .goog-tooltip {
            display: none !important;
        }
        .goog-tooltip:hover {
            display: none !important;
        }
        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }


        .sidebar-casesw .slick-prev {
            width: 45px;
            height: 45px;
            left: 0;
            background-color: #fde428;
            z-index: 1;
        }

        .sidebar-casesw .slick-next {
            width: 45px;
            height: 45px;
            right: 0%;
            background-color: #fde428;
        }

        /*---------------Manish--------*/

        .mr
        {    margin-bottom: -40px;
        }
        .sec{

            margin-left: 0px;
        }
        .spacer-1 {
            background-color: #ffffff;
            transition: 0.5s linear;
            height: 350px;
            border-radius: 3px;
            padding: 2px;
            text-align: center;
            border: 1px solid #eee;
            margin: 10px -15px 10px -15px;
        }
        .spacer-1:hover {
            /*box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.48), 0 3px 10px 0 rgba(0, 0, 0, 0.48);*/
        }

        .spacer-11 {
            background-color: #ffffff;
            transition: 0.5s linear;
            height:auto;
            border-radius: 3px;
            padding: 2px;
            text-align: center;
            border: 1px solid #eee;
            margin: 10px -15px 10px -15px;
        }
        .spacer-11:hover {
            /*box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.48), 0 3px 10px 0 rgba(0, 0, 0, 0.48);*/
        }
        .video-blk-1 p {
            padding: 1em;

            height: auto;
            overflow: hidden;
            margin-bottom: 2em;
            font-size: 13px;
            color: #2a383e;
            line-height: 24px;
            font-family: "Poppins", Sans-serif;
        }

        .font{
            text-align:center;
            color: rgb(0, 46, 91);
            font-size: 20px;
            line-height:25px;

        }

        .font-1{
            text-align:center;
            color: rgb(0, 46, 91);
            font-size: 18px;
            line-height:22px;

        }
        .mr-top{
            margin-top:20px;
        }

        .video-blk-1 {
            margin-top: 2em;
        }

        .mr-ul{

            margin-top: -40px;
            text-align: left;
        }
        .mrt{
            margin-top: 10px;
            background: white;
        }
        .infobox-icon-wrap-1{
            display: flex;
            transition: .3s;
            align-items: center;
            justify-content: center;
            margin: auto;
            width: 60px;
            height: 60px;
            background: #ffffff;
            border-radius: 50%;
            transition: .5s;
            margin-top:10px;
        }
        .infobox-icon-wrap-1:hover{
            transform: scale(1.1);

        }

        .spa{
            padding-right: 15px;
            padding-left: 20px;
            margin-right: auto;
            margin-left: auto;
            font-family: "Poppins", Sans-serif;
            background: #ffffff;
            font-size:14px;
        }

        .custom-title-12{

            padding: 10px 7px 0;}

        .custom-title-121{
            transform: scale(1.1);
            box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.48), 0 3px 10px 0 rgba(0, 0, 0, 0.48);
            /*margin:0px 5px 0px 5px;*/
        }

        .cbk {
            padding: 10px;
        }

        @media screen and (max-width: 600px)
        {

            .mrt{
                margin-top: 0px;
                background: white;
            }
            .mr-ul{
                margin-bottom: -40px;
                text-align: left;
            }

            .spacer-1 {

                height: auto;

            }
            .spacer-1:hover {
                box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.48), 0 4px 20px 0 rgba(0, 0, 0, 0.48);
                z-index: 1;

            }
            .sec{
                margin-top: 1.5em;
                margin-left:-5px;

            }
            .center{

                text-align:center;
            }
            .spa{
                padding-right: -15px;
                padding-left: 5px;
                margin-right: auto;
                margin-left: auto;
                font-family: "Poppins", Sans-serif;
                background: #ffffff;
                font-size:14px;
            }

            .custom-title-121 {
                transform: unset !important;
                box-shadow: unset !important;
            }

            .video-blk-1 {
                margin-top: 0em;
            }

            .gallery-box1 .row {
                margin: 0 !important;
                padding: 0;
            }
        }

    </style>

    <div class="team-banner life-page">
        <p class="scrollanimation animated bounceIn adl-2"><span style="color: rgb(253, 228, 40);">Life at</span> Netrika</p>
    </div>
    <div class="page_title">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <span><a href="/">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#">Media</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Life At Netrika</span></a></span>
            </div>
        </div>
    </div>
    <section class="videogallery-page main-v-page spa" id="videogallery-page" style="background: #ffffff;">
        <div class="container-fluid">
            <div class="row sec">

                <div class="col-md-9">

                    <div class="gallery-box1">
                        <div style="padding: 0px;" class="container">
                           <div class="custom_heading">
                            <!--  <h2 style="text-align: center;" class="custom-title">Video Gallery</h2>-->

                            </div>
							 <p class="center"><span style="font-weight: 400;">At Netrika, our work policy is very simple. We believe in collaboration, innovation and commitment to excellence. A perfect balance of raw talent and experienced professionals makes Netrika a dynamic environment to work in. Our performance-oriented culture drives respect and dedication towards the work we put forward.</span></p>
                            <div class="col-md-12 row">




                                            <div class="col-md-4 video-blk-1">
                                                <div class="cbk">
                                                <div class="spacer-1 custom-title-12">
                                                    <h2  class="custom-title font">Transparent Communication</h2>
                                                    <div class="custom_heading mr"><p></p></div>

                                                    <p>We encourage open, frequent and transparent communication within the workplace, about both good and bad experiences. Face-to- face interactions, one-on- one meetings, web chats, and employee intranet are just some of the ways through which we connect with our employees. </p>
                                                </div>
                                            </div>
                                        </div>



                                            <div class="col-md-4 video-blk-1">
                                                <div class="cbk">
                                                <div class="spacer-1 custom-title-121">
                                                    <h2  class="custom-title font" >Performance <br>Driven</h2>
                                                    <div class="custom_heading mr"><p></p></div>
                                                    <br>
                                                    <p>We are passionate about our work and believe in a performance-driven culture. We set challenging targets and work hard to achieve them. Our employees are motivated to take self-initiatives thereby improving individual as well as the team's performance.</p>
                                                </div>
                                            </div>
                                        </div>


                                            <div class="col-md-4 video-blk-1">
                                                <div class="cbk">
                                                <div class="spacer-1 custom-title-12">
                                                    <h2 class="custom-title font">Quality <br>Focused</h2>
                                                    <div class="custom_heading mr"><p></p></div>
                                                    <br>
                                                    <p>At Netrika, customer satisfaction through quality work is a way of life. We leverage our cross functional abilities to deliver various projects but what stands common is the commitment to consistently provide high-quality through every deliverable.</p>
                                                </div>
                                            </div>
                                        </div>
                            </div>


                        </div>
                    </div>

				<!-----------Work Benefits-------------->

					<div class="gallery-box1">
                        <div style="padding: 0px;" class="container">
                           <div class="custom_heading">
                              <h2  class="custom-title mr-top">Work Benefits</h2>
							  <div class="custom_heading "><p></p></div>

                            </div>
							 <p class="center"><span style="font-weight: 400;">Netrika is a people-oriented company where we believe that the well-being of our employees is integral to our success. Our people are our most valuable assets and we continuously strive to provide a work environment that instills a sense of mutual belongingness.</span></p>
                            <div class=" col-md-12 row sec">



                                        <div class="col-md-4 video-blk-1">
                                            <div class="cbk">
                                            <div class="spacer-1 custom-title-12">

											<div class="icon-infobox">
                                                <div class="infobox-icon">
                                                    <div class="infobox-icon-wrap-1 mrt">
                                                        <img  src="/img/services/icons/professional-support.svg" alt="">
                                                    </div>
                                                </div>

                                            </div>

                                           <h2  class="custom-title font">Professional Support</h2>
										   <div class="custom_heading mr"><p></p></div>

                                            <p><ul class="mr-ul">
							 <li>Orientation/Induction programs</li>
<li>On-the- job training</li>
<li>Skill improvement programs</li>
<li>Employee resource centre</li></ul></p>
                                            </div>
                                            </div>
                                        </div>

                                    <div class="col-md-4 video-blk-1">
                                        <div class="cbk">
                                            <div class="spacer-1 custom-title-121">

											<div class="icon-infobox">
                                                <div class="infobox-icon">
                                                    <div class="infobox-icon-wrap-1 mrt">
                                                        <img  src="/img/services/icons/employee-benefits.svg" alt="">
                                                    </div>
                                                </div>

                                            </div>

                                           <h2 class="custom-title font">Employee Benefits</h2>
										   <div class="custom_heading mr"><p></p></div>

                                            <p><ul class="mr-ul">
											<li>Statutory benefits</li>
											<li>Flexible work timings</li>
											</ul> </p>
                                            </div>
                                        </div>
                                        </div>

                                         <div class="col-md-4 video-blk-1">
                                             <div class="cbk">
                                            <div class="spacer-1 custom-title-12">

											<div class="icon-infobox">
                                                <div class="infobox-icon">
                                                   <div class="infobox-icon-wrap-1 mrt">
                                                        <img  src="/img/services/icons/vacation-and-time-off.svg" alt="">
                                                    </div>
                                                </div>

                                            </div>

                                           <h2 style="text-align: center;" class="custom-title font">Vacation and Time-off</h2>
										   <div class="custom_heading mr"><p></p></div>

                                            <p><ul class="mr-ul">
											<li>Earned leaves</li>
											<li>Optional holidays</li>
											<li>Maternity and paternity leaves</li>

											</ul> </p>
                                            </div>
                                             </div>
                                        </div>

                            </div>


                        </div>
                    </div>


					<!-----------Work benifits end-------------->

						<!-----------Beyond Work -------------->

					<div class="gallery-box1">
                        <div style="padding: 0px;" class="container">
                           <div class="custom_heading">
                              <h2  class="custom-title mr-top">Beyond Work</h2>
                               <div class="custom_heading "><p></p></div>
                            </div>
							 <p class="center"><span style="font-weight: 400;">At Netrika, we believe that nurturing personal skill sets and interests of our employees will not only help them to be intrinsically motivated but also significantly contribute to the overall work aesthetics. In line with this we have developed employee engagement programme and policies that facilitates a healthy work-life balance.</span></p>



                        </div>
                    </div>

					<!-----------Beyond Work End -------------->

					<!-----------Explore Our Culture -------------->
					<div class="gallery-box1">
                        <div style="padding: 0px;" class="container">

                            <div class="row" style="margin-top: 1.5em;">


                                   <div class="col-md-12 row">
                                       <div class="col-md-6" >
                                           <div class="custom_heading">
                                               <h2  class="custom-title mr-top">Netrika's 6th Anniversary</h2>
                                               <div class="custom_heading "><p></p></div>
                                           </div>

                                           <div class="sidebar-casestudies-box">



                                               <div class="sidebar-casesw sidebar-photos slider">


                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-13.jpg"><img src="/img/life/thumbnails/image-thumb-13.jpg" alt="Netrika Team Celebrate 6th Aniversary"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-14.jpg"><img src="/img/life/thumbnails/image-thumb-14.jpg" alt="Cultural Celebration on Netrika's 6th Anniversary"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-15.jpg"><img src="/img/life/thumbnails/image-thumb-15.jpg" alt="Celebration on Netrika's 6th Anniversary"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-16.jpg"><img src="/img/life/thumbnails/image-thumb-16.jpg" alt="Netrika's 6th Anniversary"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">
                                                           </div>
                                                       </div>
                                                   </div>









                                               </div>
                                           </div>
                                       </div>

                                       <div class="col-md-6" >
                                           <div class="custom_heading">
                                               <h2  class="custom-title mr-top">Diwali</h2>
                                               <div class="custom_heading "><p></p></div>
                                           </div>

                                           <div class="sidebar-casestudies-box">



                                               <div class="sidebar-casesw sidebar-photos slider">


                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-5.jpg"><img src="/img/life/thumbnails/image-thumb-5.jpg" alt="Netrika Diwali Celebration"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-6.jpg"><img src="/img/life/thumbnails/image-thumb-6.jpg" alt="Diwali Celebration"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-7.jpg"><img src="/img/life/thumbnails/image-thumb-7.jpg" alt="Netrika Team Celebrate Diwali"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-8.jpg"><img src="/img/life/thumbnails/image-thumb-8.jpg" alt="Netrika Team on Diwali Celebration"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">
                                                           </div>
                                                       </div>
                                                   </div>



                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-9.jpg"><img src="/img/life/thumbnails/image-thumb-9.jpg" alt="Diwali Celebration at Netrika"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">
                                                           </div>
                                                       </div>
                                                   </div>





                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6" >
                                           <div class="custom_heading">
                                               <h2  class="custom-title mr-top">Independence Day</h2>
                                               <div class="custom_heading "><p></p></div>
                                           </div>

                                           <div class="sidebar-casestudies-box">



                                               <div class="sidebar-casesw sidebar-photos slider">


                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-10.jpg"><img src="/img/life/thumbnails/image-thumb-10.jpg" alt="Independence Day Cake Celebration"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-11.jpg"><img src="/img/life/thumbnails/image-thumb-11.jpg" alt="Independence Day Celebration at Netrika"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-12.jpg"><img src="/img/life/thumbnails/image-thumb-12.jpg" alt="Independence Day Celebration"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>








                                               </div>
                                           </div>
                                       </div>

                                       <div class="col-md-6" >
                                           <div class="custom_heading">
                                               <h2  class="custom-title mr-top">Republic Day</h2>
                                               <div class="custom_heading "><p></p></div>
                                           </div>

                                           <div class="sidebar-casestudies-box">



                                               <div class="sidebar-casesw sidebar-photos slider">


                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-17.jpg"><img src="/img/life/thumbnails/image-thumb-17.jpg" alt="Republic Day Celebration at Netrika"></a>
                                                          </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>


                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6" >

                                           <div class="custom_heading">
                                               <h2  class="custom-title mr-top">Netrika's 5th Anniversary</h2>
                                               <div class="custom_heading "><p></p></div>
                                           </div>


                                           <div class="sidebar-casestudies-box">



                                               <div class="sidebar-casesw sidebar-photos slider">


                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-1.jpg"><img src="/img/life/thumbnails/image-thumb-1.jpg" alt="Celebration on Netrika's 5th Anniversary"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-2.jpg"><img src="/img/life/thumbnails/image-thumb-2.jpg" alt="Netrika 5th Work Aniversary"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-3.jpg"><img src="/img/life/thumbnails/image-thumb-3.jpg" alt="Netrika 5th Aniversary Celebration"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>




                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-4.jpg"><img src="/img/life/thumbnails/image-thumb-4.jpg" alt="Netrika 5th Aniversary"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">
                                                           </div>
                                                       </div>
                                                   </div>









                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6" >
                                           <div class="custom_heading">
                                               <h2  class="custom-title mr-top">Women's Day</h2>
                                               <div class="custom_heading "><p></p></div>
                                           </div>

                                           <div class="sidebar-casestudies-box">



                                               <div class="sidebar-casesw sidebar-photos slider">


                                                   <div>
                                                       <div class="posts-item">
                                                           <div class="sidebarpost-image">
                                                               <a class="image-gallery" data-fancybox="gallery"   href="/img/life/high-res/image-18.jpg"><img src="/img/life/thumbnails/image-thumb-18.jpg" alt="Women's Day Celebration at Netrika"></a>
                                                           </div>
                                                           <div class="sidebarpost-text">


                                                           </div>
                                                       </div>
                                                   </div>






                                               </div>
                                           </div>
                                       </div>
                                   </div>


                                        {{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}

										   {{--<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=YiCxqbz1N_o">--}}

                                                {{--<div style="background: url(http://img.youtube.com/vi/YiCxqbz1N_o/hqdefault.jpg);" class="video_gallery_image"></div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
										{{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}

										   {{--<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=YiCxqbz1N_o">--}}

                                                {{--<div style="background: url(http://img.youtube.com/vi/YiCxqbz1N_o/hqdefault.jpg);" class="video_gallery_image"></div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
										{{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}

										   {{--<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=YiCxqbz1N_o">--}}

                                                {{--<div style="background: url(http://img.youtube.com/vi/YiCxqbz1N_o/hqdefault.jpg);" class="video_gallery_image"></div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
										{{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}

										   {{--<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=YiCxqbz1N_o">--}}

                                                {{--<div style="background: url(http://img.youtube.com/vi/YiCxqbz1N_o/hqdefault.jpg);" class="video_gallery_image"></div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                            </div>

   {{--<div class="row" style="margin-top: 2em;">--}}



                                        {{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}



                                                        {{--<a class="image-gallery" data-fancybox="gallery" href="/img/picture-gallery/original/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit.jpg"><img src="/img/picture-gallery/thumbnail/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit-thumb.jpg"></a>--}}



                                                    {{--</div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}

										{{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}



                                                        {{--<a class="image-gallery" data-fancybox="gallery" href="/img/picture-gallery/original/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit.jpg"><img src="/img/picture-gallery/thumbnail/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit-thumb.jpg"></a>--}}



                                                    {{--</div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}
											{{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}



                                                        {{--<a class="image-gallery" data-fancybox="gallery" href="/img/picture-gallery/original/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit.jpg"><img src="/img/picture-gallery/thumbnail/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit-thumb.jpg"></a>--}}



                                                    {{--</div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}
											{{--<div class="col-md-3 video-blk-1">--}}
                                            {{--<div class="spacer-11">--}}



                                                        {{--<a class="image-gallery" data-fancybox="gallery" href="/img/picture-gallery/original/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit.jpg"><img src="/img/picture-gallery/thumbnail/mr-sanjay-kaushik-managing-director-netrika-presenting-and-interacting-with-the-audience-at-vccircle-lp-summit-thumb.jpg"></a>--}}



                                                    {{--</div>--}}




                                            {{--</a>--}}
                                            {{--</div>--}}





                            {{--</div>--}}
                        </div>
                    </div>

					<!-----------Explore Our Culture -------------->

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




                    @if(isset($data['get_photogallery']))

                        <div class="sidebar-casestudies-box">
                            <h6 class="sidebar-custom-title">Photo Gallery
                            </h6>

                            <div class="cbv">
                                <a href="/photogallery">View All ></a>
                            </div>

                            <div class="sidebar-cases sidebar-photos slider">

                                @foreach($data['get_photogallery'] as $key=>$get_photogallery)

                                    <div>
                                        <div class="posts-item">
                                            <div class="sidebarpost-image">
                                                <a class="image-gallery" data-fancybox="gallery"  data-caption="{{$get_photogallery->text}}" href="/img/picture-gallery/original/{{$get_photogallery->image}}"><img src="/img/picture-gallery/thumbnail/{{$get_photogallery->thumbnail}}"></a>
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

                </div>

            </div>
        </div>
    </section>




    <section class="cta" id="cta">
        <div class="container-fuld">
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
            autoplay: true,
            autoplaySpeed: 2000,
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

        $(".sidebar-casesw").slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });


    </script>
@endsection
