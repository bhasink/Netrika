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
                                    <th>TXN ID</th>
                                    <th>Amount</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Bank Ref No</th>
                                    <th>Mode</th>
                                    <th>Mihpay ID</th>
                                    {{--<th>User&nbsp;IP</th>--}}
                                    <th>Created At</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($payment)

                                    @foreach($payment as $key=>$payment_data)

                                        <tr>
                                            <td>{{$payment_data->id}}</td>
                                            <td>{{$payment_data->txnid}}</td>
                                            <td>{{$payment_data->amount}}</td>
                                            <td>{{$payment_data->firstname}}</td>
                                            <td>{{$payment_data->email}}</td>
                                            <td>{{$payment_data->phone}}</td>
                                            <td>{{$payment_data->bank_ref_num}}</td>
                                            <td>{{$payment_data->mode}}</td>
                                            <td>{{$payment_data->mihpayid}}</td>
                                            {{--<td>{{$services_data->message}}</td>--}}
                                            {{--<td>{{$services_data->ip}}</td>--}}
                                            <td>{{$payment_data->created_at }}</td>




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