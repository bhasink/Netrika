@extends('admin.layout.app')


@section('content')

    <!-- top tiles -->
    <div class="row" style="display: inline-block;" >
        <div class="tile_count">
            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Contact Us Leads</span>
                <div class="count">{{$data['get_total_contact_us_leads']}}</div>
                <span class="count_bottom"><i class="green">{{$data['get_today_contact_us_leads']}} </i> Today's Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_weekly_contact_us_leads']}} </i> Weekly Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_monthly_contact_us_leads']}} </i> Monthly Leads</span>
            </div>


            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Quick Enquiry Leads</span>
                <div class="count">{{$data['get_today_QuickEnquiry_leads']}}</div>
                <span class="count_bottom"><i class="green">{{$data['get_total_QuickEnquiry_leads']}} </i> Today's Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_weekly_QuickEnquiry_leads']}} </i> Weekly Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_monthly_QuickEnquiry_leads']}} </i> Monthly Leads</span>
            </div>


            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Whitepaper Leads</span>
                <div class="count">{{$data['get_today_WhitePaperLeads_leads']}}</div>
                <span class="count_bottom"><i class="green">{{$data['get_total_WhitePaperLeads_leads']}} </i> Today's Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_weekly_WhitePaperLeads_leads']}} </i> Weekly Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_monthly_WhitePaperLeads_leads']}} </i> Monthly Leads</span>
            </div>


            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Work With Us Leads</span>
                <div class="count">{{$data['get_total_WorkWithUsContact_leads']}}</div>
                <span class="count_bottom"><i class="green">{{$data['get_today_WorkWithUsContact_leads']}} </i> Today's Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_weekly_WorkWithUsContact_leads']}} </i> Weekly Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_monthly_WorkWithUsContact_leads']}} </i> Monthly Leads</span>
            </div>

            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Newsletter Leads</span>
                <div class="count">{{$data['get_total_Newsletter_leads']}}</div>
                <span class="count_bottom"><i class="green">{{$data['get_today_Newsletter_leads']}} </i> Today's Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_weekly_Newsletter_leads']}} </i> Weekly Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_monthly_Newsletter_leads']}} </i> Monthly Leads</span>
            </div>

            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Service Leads</span>
                <div class="count">{{$data['get_total_ServiceLeads_leads']}}</div>
                <span class="count_bottom"><i class="green">{{$data['get_today_ServiceLeads_leads']}} </i> Today's Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_weekly_ServiceLeads_leads']}} </i> Weekly Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['get_monthly_ServiceLeads_leads']}} </i> Monthly Leads</span>
            </div>

            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Payment Leads</span>
                <div class="count">{{$data['$get_total_Payment_leads']}}</div>
                <span class="count_bottom"><i class="green">{{$data['$get_today_Payment_leads']}} </i> Today's Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['$get_weekly_Payment_leads']}} </i> Weekly Leads</span>
                <br>
                <span class="count_bottom"><i class="green">{{$data['$get_monthly_Payment_leads']}} </i> Monthly Leads</span>
            </div>



        </div>
    </div>

    <hr>

    <div class="row">

        <div class="col-md-4 col-sm-4 ">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Profile</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="card">
                        <div class="card-header"><b>Name:</b></div>
                        <div class="card-body">{{ Auth::user()->name }}
                        </div>

                    </div>

                    <br>
                    <div class="card">
                        <div class="card-header"><b>Last Password Change:</b></div>
                        <div class="card-body">{{ Auth::user()->updated_at->diffForHumans() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection