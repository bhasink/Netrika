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
                                    <th>Banner</th>
                                    <th>Responsive</th>
                                    <th>Text</th>
                                    <th>Status</th>
                                    <th>edit</th>
                                    <th>Delete</th>
                                    <th>About Us Link</th>
                                    <th>Know More Link</th>
                                    <th>Para</th>
                                    <th>priority</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($get_banner)

                                    @foreach($get_banner as $key=>$get_banner)

                                    <tr>
                                        <td>{{$get_banner->id}}</td>
                                        <td>
                                            <img width="50" height="50" src="/img/homebanner/{{$get_banner->banner}}" alt="">
                                        </td>
                                        <td>
                                            <img width="50"  height="50" src="/img/homebanner/responsive/{{$get_banner->responsive}}" alt="">
                                        </td>
                                        <td>{!! $get_banner->text !!}</td>
                                        <td>{{$get_banner->status ==1? 'Active': 'Deactive'}}</td>
                                        <td>
                                            <a href="/admin/home/banner/edit/{{$get_banner->id}}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>

                                            <form action="{{ route('banner.destroy', $get_banner->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit" onclick="return ConfirmDelete()">Delete</button>
                                            </form>

                                        </td>

                                        <td>{{$get_banner->about_us_link}}</td>
                                        <td>{{$get_banner->know_more_link}}</td>
                                        <td>{{$get_banner->para}}</td>

                                        <td>{{$get_banner->priority}}</td>
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



@section('script')

    <script>

        function ConfirmDelete()
        {
            var x = prompt("Are you sure you want to delete?");
            if (x == "delete" || x == "Delete" || x == "DELETE")
                return true;
            else
                return false;
        }

    </script>


@endsection