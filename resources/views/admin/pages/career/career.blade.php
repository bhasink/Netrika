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
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Location</th>
                                    <th>Type</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Experience</th>
                                    <th>Job Description</th>
                                    <th>Certification</th>
                                    <th>Academic Qualification</th>
                                    <th>Roles and Responsiblities</th>
                                    <th>Required Skills</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>


                                @if($get_career_data)

                                    @foreach($get_career_data as $key=>$get_career_data_data)

                                        <tr>
                                            <td>{{$get_career_data_data->id}}</td>
                                            <td>{{\Illuminate\Support\Str::limit($get_career_data_data->position,30)}}</td>

                                            <td>{{optional($get_career_data_data->career_department)->name}}</td>

                                            <td>
                                                {{\Illuminate\Support\Str::limit(optional($get_career_data_data->career_pos)->name,20)}}
                                              </td>



                                            <td>
                                                <a href="/admin/career/edit/{{$get_career_data_data->id}}" class="btn btn-success">Edit</a>
                                            </td>

                                            <td>

                                                <form action="{{ route('career.destroy', $get_career_data_data->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" onclick="return ConfirmDelete()">Delete</button>
                                                </form>

                                            </td>


                                            <td>

                                                @foreach($get_career_data_data->career_location()['exp_career_department'] as $key=>$car_location)

                                                    {{$car_location->name}}

                                                @endforeach

                                            </td>


                                            <td>{{$get_career_data_data->type}}</td>

                                            <td>{{$get_career_data_data->designation}}</td>

                                            <td>{{$get_career_data_data->department}}</td>

                                            <td>{!! $get_career_data_data->	experience !!}</td>

                                            <td>

                                                <div style="display: block;width: 600px;white-space: normal;">

                                                    {!! $get_career_data_data->	job_description !!}
                                                </div>

                                            </td>


                                            <td>{!! $get_career_data_data->	certification !!}</td>

                                            <td>  <div style="display: block;width: 600px;white-space: normal;">{!!  $get_career_data_data->academic_qualification !!} </div></td>



                                            <td>  <div style="display: block;width: 600px;white-space: normal;">{!!  $get_career_data_data->roles_n_responsiblities !!} </div></td>

                                            <td>  <div style="display: block;width: 600px;white-space: normal;">{!!  $get_career_data_data->required_skills !!} </div></td>


                                            <td>{!! $get_career_data_data->	status == 1 ? 'Active': 'Inactive' !!}</td>

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