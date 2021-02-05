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
                                    <th>Title</th>
                                    <th>Youtube Video code</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($get_gallery_video_data)

                                    @foreach($get_gallery_video_data as $key=>$get_gallery_video_data_data_d)

                                        <tr>
                                            <td>{{$get_gallery_video_data_data_d->id}}</td>
                                            <td>{{\Illuminate\Support\Str::limit($get_gallery_video_data_data_d->title,40)}}</td>


                                            <td>{{$get_gallery_video_data_data_d->video_link}}</td>

                                            <td>{{$get_gallery_video_data_data_d->status == 1 ? 'Active': 'Inactive'}}</td>

                                            <td>
                                                <a href="/admin/gallery/video/edit/{{$get_gallery_video_data_data_d->id}}" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>

                                                <form action="{{ route('gallery_video.destroy', $get_gallery_video_data_data_d->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" onclick="return ConfirmDelete()">Delete</button>
                                                </form>

                                            </td>


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