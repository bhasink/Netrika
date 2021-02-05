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
                                    <th>Service</th>
                                    <th>Organization</th>
                                    <th>Subject</th>
                                    <th>Mobile&nbsp;No</th>
                                    <th>Message</th>
                                    <th>User&nbsp;IP</th>
                                    <th>Created At</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($services)

                                    @foreach($services as $key=>$services_data)

                                        <tr>
                                            <td>{{$services_data->id}}</td>
                                            <td>{{$services_data->name}}</td>
                                            <td>{{$services_data->email}}</td>
                                            <td>{{$services_data->service}}</td>
                                            <td>{{$services_data->organization}}</td>
                                            <td>{{$services_data->subject}}</td>
                                            <td>{{$services_data->phone_no}}</td>
                                            <td>{{$services_data->message}}</td>
                                            <td>{{$services_data->ip}}</td>
                                            <td>{{$services_data->created_at }}</td>




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