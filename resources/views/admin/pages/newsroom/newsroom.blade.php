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
                                    <th>Text</th>
                                    <th>Article Link</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Custom Date</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($get_newsroom_data)

                                    @foreach($get_newsroom_data as $key=>$get_newsroom_data_d)

                                        <tr>
                                            <td>{{$get_newsroom_data_d->id}}</td>
                                            <td>{{\Illuminate\Support\Str::limit($get_newsroom_data_d->text,40)}}</td>

                                            <td>{{\Illuminate\Support\Str::limit($get_newsroom_data_d->article_link,50)}}</td>



                                            <td>
                                                <a href="/admin/newsroom/edit/{{$get_newsroom_data_d->id}}" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>

                                                <form action="{{ route('newsroom.destroy', $get_newsroom_data_d->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" onclick="return ConfirmDelete()">Delete</button>
                                                </form>

                                            </td>

                                            <td>{{\Illuminate\Support\Str::limit($get_newsroom_data_d->custom_date,10)}}</td>


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