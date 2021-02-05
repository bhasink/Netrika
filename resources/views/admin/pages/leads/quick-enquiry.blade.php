@extends('admin.layout.app')


@section('content')


    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            {{--<div class="x_title">--}}
            {{--<h2>Responsive example<small>Users</small></h2>--}}
            {{--<ul class="nav navbar-right panel_toolbox">--}}
            {{----}}
            {{--</ul>--}}
            {{--<div class="clearfix"></div>--}}
            {{--</div>--}}

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('delete'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif




            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <p class="text-muted font-13 m-b-30">
                            </p>

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile&nbsp;No</th>
                                    <th>Subject</th>

                                    <th>Message</th>
                                    <th>User&nbsp;IP</th>
                                    <th>Created At</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($quick_enquiry)

                                    @foreach($quick_enquiry as $key=>$quick_enquiry_data)

                                        <tr>
                                            <td>{{$quick_enquiry_data->id}}</td>
                                            <td>{{$quick_enquiry_data->name}}</td>
                                            <td>{{$quick_enquiry_data->email}}</td>
                                            <td>{{$quick_enquiry_data->phone_no}}</td>
                                            <td>{{$quick_enquiry_data->subject}}</td>
                                            <td>{{$quick_enquiry_data->message}}</td>
                                            <td>{{$quick_enquiry_data->ip}}</td>

                                            <td>{{$quick_enquiry_data->created_at }}</td>




                                        </tr>

                                    @endforeach

                                @endif

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection