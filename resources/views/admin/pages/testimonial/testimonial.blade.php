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
                                    <th>Position</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($get_testimonial_data)

                                    @foreach($get_testimonial_data as $key=>$get_testimonial_d)

                                    <tr>
                                        <td>{{$get_testimonial_d->id}}</td>
                                        <td>{{$get_testimonial_d->name}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($get_testimonial_d->position,30)}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($get_testimonial_d->description,10)}}</td>
                                        <td>
                                            <img width="50" height="50" src="/img/testimonial/{{$get_testimonial_d->image}}" alt="">
                                        </td>
                                        <td>{{$get_testimonial_d->status ==1? 'Active': 'Deactive'}}</td>

                                        <td>
                                            <a href="/admin/home/testimonial/edit/{{$get_testimonial_d->id}}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>

                                            <form action="{{ route('testimonial.destroy', $get_testimonial_d->id)}}" method="post">
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