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
                                    <th>Whitepaper&nbsp;ID</th>

                                    <th>Created At</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($white_papers)

                                    @foreach($white_papers as $key=>$white_papers_data)

                                        <tr>
                                            <td>{{$white_papers_data->id}}</td>
                                            <td>{{$white_papers_data->name}}</td>
                                            <td>{{$white_papers_data->email}}</td>
                                            <td>{{$white_papers_data->mobile_no}}</td>

                                            <td>

                                                @php


                                                    $get_white_papersds = \App\WhitePaper::where('id',$white_papers_data->white_paper_id)->first();


                                                @endphp


                                                {{optional($get_white_papersds)->title}}


                                            </td>



                                            <td>{{$white_papers_data->created_at }}</td>




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