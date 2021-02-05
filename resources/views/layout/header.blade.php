<!--------------------------------------------------------------
Navigation section
---------------------------------------------------------------->

<style>
.know-btn{margin-left: 0;}
@media screen and (max-width: 600px){
.headmain{
	width:112px;
}
.key-expert .info {
    padding: 1rem 0;
    color: #002e5b;
    font-size: 15px;
}

}

.cta{
    margin-bottom: 0;	
}

footer{
	    top: 0;
		z-index: inherit;
}
</style>

<header>
    <div class="top-bar">
        <div class="container header-contain">
            <div class="hidden-xs hidden-sm visible-md visible-lg">
                <div class="row">
                    <div class="col-md-4 col" style="display: flex; align-items: center;">
                        <div id="google_translate_element"></div>

                        {{--<div class="dropdown lang-btn">--}}
                            {{--<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" type="button">--}}
                                {{--English </div>--}}
                            {{--<div class="dropdown-content">--}}
                                {{--<a id="ar" href="#ar">Arabic</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>




                    <div class="col-md-8 text-right country-btn col">
                      <span class="country-btn-hov " id="divText"></span>
                        {{--<select type="text" class="country-address selectpicker" id="dropBox">--}}
                            {{--<option value="1">India</option>--}}
                            {{--<option value="2">Sri Lanka</option>--}}
                            {{--<option value="3">UAE</option>--}}
                            {{--<option value="4">Singapore</option>--}}
                        {{--</select>--}}


                        {{--<ul class="nav navbar-nav">--}}
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle headmain" type="button" id="dropBox" data-toggle="dropdown">
                               Country
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                                <li id="in"  role="presentation"><a role="menuitem" tabindex="-1" href="#">India</a></li>
                                <li id="sing" role="presentation"><a  role="menuitem" tabindex="-1" href="#">Singapore </a></li>
                                <li id="sri" role="presentation"><a  role="menuitem" tabindex="-1" href="#">Sri Lanka</a></li>
                                <li id="uae"  role="presentation"><a role="menuitem" tabindex="-1" href="#">UAE</a></li>


                            </ul>
                        </div>
                        {{--</ul>--}}

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid top-bar-second">
        <div class="container header-contain main-menu ">
            <div class="hidden-xs hidden-sm visible-md visible-lg">
                <div class="row">
                    <div class="col-4">
                        <span><a href="/"><img src="{{asset('/img/Netrika-logo.png')}}" width="200px" class="logo" alt="Netrika"></a></span>
                    </div>
                    <div class="col-8 social-side text-right ">
                        <div class="desktop-social">
                            <a style="padding-right: 2rem;" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 1800 121 300000</a>
                            <a target="_blank" href="https://www.facebook.com/Netrika-Consulting-India-Pvt-Ltd-1451824638362515/"><img src="{{asset('/img/f.png')}}"></a>
                            <a target="_blank" href="https://twitter.com/Netrika_PvtLtd"><img src="{{asset('/img/t.png')}}"></a>
                            <a target="_blank" href="https://www.linkedin.com/company/netrika-consulting-india-pvt-ltd/"><img src="{{asset('/img/l.png')}}"></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCdsATq18jtz0UQUi3R4b7Cg"><img src="{{asset('/img/y.png')}}"></a>
                        </div>
                        <div class="mobile-m" ><span style="font-size:30px;cursor:pointer;color: #fde428;" onclick="openNav()">&#9776; </span></div>
                    </div>
                </div>


            </div>

        </div>
        <div id="mySidenav" class="sidenav">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <nav class="navbar navbar-expand-lg  main-nav " id="main-nav">
            <div class="container header-contain">
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link active" href="/">Home<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                            <ul class="sub-menu-main">
                                <li class="subnavItem"><a href="/who-we-are">Who We Are</a></li>
                                <li class="subnavItem"><a  href="/team">Our Core Team</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" >Our Services</a>
                            <ul class="sub-menu-main">
{{--                                {{dd($menudata['get_service_cat'])}}--}}
                                @if(isset($menudata['get_service_cat']))
                                    @foreach($menudata['get_service_cat'] as $key=>$get_service)

                                        <li class="subnavItem dropdown" style="width: 100%;">
                                            <a href="/services/{{$get_service->slug.'/'.$get_service->slug}}"  >{{$get_service->name}}</a>
                                            <ul class="dropdown-menu sb-menu">

                                                @foreach($menudata['get_service'] as $key=>$get_service_sub)


                                                    @if($get_service_sub->service_category_id == $get_service->id)
                                                        {{--{{dd($get_service_sub)}}--}}
                                                        {{--&& $get_service->slug !=  $get_service_sub->slug--}}
                                                        @if($get_service->slug != $get_service_sub->slug)

                                                <li><a href="/services/{{$get_service->slug.'/'.$get_service_sub->slug}}">{{$get_service_sub->name}}</a></li>

                                                        @endif

                                                    @endif


                                                @endforeach

                                            </ul>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Media</a>
                            <ul class="sub-menu-main">
                                <li class="subnavItem"><a href="/newsroom">Newsroom</a></li>
                                <li class="subnavItem"><a href="/photogallery">Photo Gallery</a></li>
                                <li class="subnavItem"><a href="/videogallery">Video Gallery</a></li>
                                <li class="subnavItem"><a href="https://www.netrika.in/ncbt-coffee-table-book" target="_blank">Coffee Table</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Insights</a>
                            <ul class="sub-menu-main">
                                <li class="subnavItem"><a href="/casebook">Our Casebook</a></li>
                                <li class="subnavItem"><a href="/white-paper">Whitepaper and Surveys</a></li>
                                <li class="subnavItem"><a href="https://blog.netrika.com/">Blog Post</a></li>

                            </ul>
                        </li>

                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#">Contact Us</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="/work-with-us">Work With Us</a>--}}
                        {{--</li>--}}


                        <li class="nav-item">
                            <a class="nav-link" href="#">Career</a>
                            <ul class="sub-menu-main">
                                <li class="subnavItem"><a href="/work-with-us">Work With Us</a></li>
                                <li class="subnavItem"><a href="/life-at-netrika">Life At Netrika</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
                <div  style="float: right;"><span style="display: none;" class="mobile-hide search-btn openBtn" onclick="openSearch()"><i class="fa fa-search" aria-hidden="true"></i></span><a class="call-btn" href="/contact-us"><svg class="mobile-hide" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.076 512.076" style="enable-background:new 0 0 512.076 512.076;width: 20px;fill: #ffffff;" xml:space="preserve">
<g transform="translate(-1 -1)"><g><path d="M499.639,396.039l-103.646-69.12c-13.153-8.701-30.784-5.838-40.508,6.579l-30.191,38.818
				c-3.88,5.116-10.933,6.6-16.546,3.482l-5.743-3.166c-19.038-10.377-42.726-23.296-90.453-71.04s-60.672-71.45-71.049-90.453
				l-3.149-5.743c-3.161-5.612-1.705-12.695,3.413-16.606l38.792-30.182c12.412-9.725,15.279-27.351,6.588-40.508l-69.12-103.646
				C109.12,1.056,91.25-2.966,77.461,5.323L34.12,31.358C20.502,39.364,10.511,52.33,6.242,67.539
				c-15.607,56.866-3.866,155.008,140.706,299.597c115.004,114.995,200.619,145.92,259.465,145.92
				c13.543,0.058,27.033-1.704,40.107-5.239c15.212-4.264,28.18-14.256,36.181-27.878l26.061-43.315
				C517.063,422.832,513.043,404.951,499.639,396.039z M494.058,427.868l-26.001,43.341c-5.745,9.832-15.072,17.061-26.027,20.173
				c-52.497,14.413-144.213,2.475-283.008-136.32S8.29,124.559,22.703,72.054c3.116-10.968,10.354-20.307,20.198-26.061
				l43.341-26.001c5.983-3.6,13.739-1.855,17.604,3.959l37.547,56.371l31.514,47.266c3.774,5.707,2.534,13.356-2.85,17.579
				l-38.801,30.182c-11.808,9.029-15.18,25.366-7.91,38.332l3.081,5.598c10.906,20.002,24.465,44.885,73.967,94.379
				c49.502,49.493,74.377,63.053,94.37,73.958l5.606,3.089c12.965,7.269,29.303,3.898,38.332-7.91l30.182-38.801
				c4.224-5.381,11.87-6.62,17.579-2.85l103.637,69.12C495.918,414.126,497.663,421.886,494.058,427.868z"></path>
        <path d="M291.161,86.39c80.081,0.089,144.977,64.986,145.067,145.067c0,4.713,3.82,8.533,8.533,8.533s8.533-3.82,8.533-8.533
				c-0.099-89.503-72.63-162.035-162.133-162.133c-4.713,0-8.533,3.82-8.533,8.533S286.448,86.39,291.161,86.39z"></path>
        <path d="M291.161,137.59c51.816,0.061,93.806,42.051,93.867,93.867c0,4.713,3.821,8.533,8.533,8.533
				c4.713,0,8.533-3.82,8.533-8.533c-0.071-61.238-49.696-110.863-110.933-110.933c-4.713,0-8.533,3.82-8.533,8.533
				S286.448,137.59,291.161,137.59z"></path>
        <path d="M291.161,188.79c23.552,0.028,42.638,19.114,42.667,42.667c0,4.713,3.821,8.533,8.533,8.533s8.533-3.82,8.533-8.533
				c-0.038-32.974-26.759-59.696-59.733-59.733c-4.713,0-8.533,3.82-8.533,8.533S286.448,188.79,291.161,188.79z"></path></g></g></svg><span style="padding-left: 5px;">Contact Us</span></a></div>
            </div>
        </nav>
            <div class="container demo-2">
                <!-- Codrops top bar -->



                <div class="column">
                    <div id="dl-menu" class="dl-menuwrapper">

                        <ul class="dl-menu dl-menuopen">
                            <li>
                                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>

                            </li>
                            <li>
                                <a class="nav-link" href="#">About</a>
                                <ul class="dl-submenu">
                                    <li class="subnavItem"><a href="/who-we-are">Who We Are</a></li>
                                    <li class="subnavItem"><a  href="/team">Our Core Team</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Services</a>
                                <ul class="dl-submenu">
                                    @if(isset($menudata['get_service_cat']))
                                        @foreach($menudata['get_service_cat'] as $key=>$get_service)


                                            <li>
                                                <a href="/services/{{$get_service->slug.'/'.$get_service->slug}}">{{$get_service->name}}</a>
                                                <ul class="dl-submenu">

                                                    @if($get_service->name == 'Training and Certifications')
                                                    <li><a href="https://training.netrika.com/">Training and Certifications</a></li>
                                                    @endif

                                                    @foreach($menudata['get_service'] as $key=>$get_service_sub)
                                                        @if($get_service_sub->service_category_id == $get_service->id)
                                                            {{--&& $get_service->slug !=  $get_service_sub->slug--}}
                                                            {{--@if($get_service->slug != $get_service_sub->slug)--}}
                                                            <li><a href="/services/{{$get_service->slug.'/'.$get_service_sub->slug}}">{{$get_service_sub->name}}</a></li>



                                                            {{--@endif--}}

                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li>
                                <a href="#">Media</a>
                                <ul class="dl-submenu">

                                    <li class="subnavItem"><a href="/newsroom">Newsroom</a></li>
                                    <li class="subnavItem"><a href="/photogallery">Photo Gallery</a></li>
                                    <li class="subnavItem"><a href="/videogallery">Video Gallery</a></li>

                                </ul>
                            </li>
                            <li>
                                <a class="nav-link" href="https://wordpress-163112-1321751.cloudwaysapps.com/">Insights</a>  <ul class="dl-submenu">
                                    <li class="subnavItem"><a href="/casebook">Our Casebook</a></li>
                                    <li class="subnavItem"><a href="/white-paper">Whitepaper and Surveys</a></li>
                                    <li class="subnavItem"><a href="https://blog.netrika.com/">Blog Post</a></li>

                                </ul>
                            </li>

                            <li>
                                <a class="nav-link" href="#">Career</a>
                                <ul class="dl-submenu">
                                    <li class="subnavItem"><a href="/work-with-us">Work With Us</a></li>
                                    <li class="subnavItem"><a href="/life-at-netrika">Life At Netrika</a></li>

                                </ul>
                            </li>

                            <li>
                                <a class="nav-link" href="/contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- /dl-menuwrapper -->
                </div>
            </div>
        </div><!-- /container -->
        </div>
    </div>
    <div id="myOverlay" class="overlay">
        <span class="closebtns" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form action="/action_page.php">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content toll-free">
                <div class="modal-header">
                    {{--<h5 class="modal-title" id="exampleModalLongTitle"></h5>--}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Toll Free Number :</p>
                    <p>1800 121 300000</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</header>


