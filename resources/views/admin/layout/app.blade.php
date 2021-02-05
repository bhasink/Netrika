<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Netrika | Admin</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">


    <style>
        div#datatable-responsive_length {
            display: none;
        }
    </style>

</head>
<body class="nav-md">

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><span>Netrika Admin</span></a>
                </div>


                <br />  <br />  <br />  <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3></h3>
                        <ul class="nav side-menu">

                            <li><a href="/admin/dashboard"><i class="fa fa-sitemap"></i> Dashboard</a>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    {{--<li><a>Home<span class="fa fa-chevron-down"></span></a>--}}
                                        {{--<ul class="nav child_menu">--}}



                                        {{--</ul>--}}
                                    {{--</li>--}}

                                    <li><a>Banner<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">

                                            <li><a href="/admin/home/banner"> List</a>
                                            </li>
                                            <li><a href="/admin/home/add-banner">Create </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a>Testimonial<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">

                                            <li><a href="/admin/home/testimonial"> List</a>
                                            </li>
                                            <li><a href="/admin/home/add-testimonial">Create</a>
                                            </li>
                                        </ul>
                                    </li>

                                    {{--<li><a>News Board<span class="fa fa-chevron-down"></span></a>--}}
                                        {{--<ul class="nav child_menu">--}}

                                            {{--<li><a href="/admin/home/newsboard"> List</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="/admin/home/add-newsboard">Create</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}

                                </ul>
                            </li>


                            <li><a><i class="fa fa-sitemap"></i> Leads <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/leads/contactus"> Contact Us</a>
                                    </li>
                                    <li><a href="/admin/leads/quick-enquiries">Quick Enquiry </a>
                                    </li>
                                    <li><a href="/admin/leads/white-papers">White Papers </a>
                                    </li>


                                    <li><a href="/admin/leads/work-with-us">Work With Us </a>
                                    </li>


                                    <li><a href="/admin/leads/services">Services</a>
                                    </li>

                                    <li><a href="/admin/leads/payment">Payment</a>
                                    </li>

                                    <li><a href="/admin/leads/newsletter">Newsletter</a>
                                    </li>


                                </ul>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> Services <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a>Category<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/admin/service/category/view"> View All</a>
                                            </li>

                                            <li><a href="/admin/service/category/create">Create New </a>
                                            </li>
                                        </ul>
                                    </li>



                                    <li><a>Styles<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/admin/service/list-style/view"> List Style</a>
                                            </li>

                                            <li><a href="/admin/service/icon-style/view"> Icon Style</a>
                                            </li>

                                            <li><a href="/admin/service/flip-style/view"> Flip Style</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li><a href="/admin/services/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/services/create">Create New Service </a>
                                    </li>



                                </ul>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> Team <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/team/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/team/create">Create New </a>
                                    </li>

                                </ul>
                            </li>


                            <li><a><i class="fa fa-sitemap"></i> Media <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/media/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/media/create">Create New </a>
                                    </li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> Quotes <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/quotes/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/quotes/create">Create New </a>
                                    </li>

                                </ul>
                            </li>


                            <li><a><i class="fa fa-sitemap"></i>Gallery <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a>Photo<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/admin/gallery/photo/view"> View All</a>
                                            </li>

                                            <li><a href="/admin/gallery/photo/create">Create New </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a>Video<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="/admin/gallery/video/view"> View All</a>
                                            </li>

                                            <li><a href="/admin/gallery/video/create">Create New </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>


                            <li><a><i class="fa fa-sitemap"></i> Casebook <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">


                                    <li><a href="/admin/casebook/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/casebook/content">Main Content </a>
                                    </li>


                                    <li><a href="/admin/casebook/create">Create New </a>
                                    </li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> Newsroom <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/newsroom/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/newsroom/create">Create New </a>
                                    </li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> Whitepaper <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/whitepaper/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/whitepaper/create">Create New </a>
                                    </li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> Career <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/career/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/career/create">Create New </a>
                                    </li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-sitemap"></i> CMS <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/cms/view"> View All</a>
                                    </li>

                                    <li><a href="/admin/cms/create">Create New </a>
                                    </li>

                                </ul>
                            </li>




                            <li><a><i class="fa fa-sitemap"></i>Settings <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li><a href="/admin/change-password"> Change Password</a>
                                    </li>
                                    {{--<li><a>Photo<span class="fa fa-chevron-down"></span></a>--}}
                                        {{--<ul class="nav child_menu">--}}
                                            {{--<li><a href="/admin/photo/view"> View All</a>--}}
                                            {{--</li>--}}

                                            {{--<li><a href="/admin/photo/create">Create New </a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}

                                    {{--<li><a>Video<span class="fa fa-chevron-down"></span></a>--}}
                                        {{--<ul class="nav child_menu">--}}
                                            {{--<li><a href="/admin/video/view"> View All</a>--}}
                                            {{--</li>--}}

                                            {{--<li><a href="/admin/video/create">Create New </a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}

                                </ul>


                            </li>



                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                {{--<img src="images/img.jpg" alt="">--}}
                                Netrika
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->

            @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                {{--Netrika Admin--}}
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="/vendors/Flot/jquery.flot.js"></script>
<script src="/vendors/Flot/jquery.flot.pie.js"></script>
<script src="/vendors/Flot/jquery.flot.time.js"></script>
<script src="/vendors/Flot/jquery.flot.stack.js"></script>
<script src="/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/vendors/moment/min/moment.min.js"></script>
<script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="/vendors/jszip/dist/jszip.min.js"></script>
<script src="/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="/build/js/custom.js"></script>

<script>
    // CKEDITOR.replace( 'main_content' );

    $("textarea").each(function(){
        CKEDITOR.inline( this );
    });
</script>



@yield('script')

</body>
</html>
