
@if(isset($get_career))

    @foreach($get_career as $key=>$get_career_data)

        <button class="accordion"><span class="position-name">{{$get_career_data->position}}</span><span class="time">{{$get_career_data->type}}</span><span class="aply-btn"><a  data-toggle="modal" data-target="#exampleModalCenters"  href="#">Apply Now</a></span></button>

        <div class="panel {{$key == 0 ? 'fpan' : ''}}">
            <div class="ddl">
                <p><strong>Designation:</strong> {{$get_career_data->designation}}</p>

                <p><strong>Department:</strong> {{$get_career_data->department}}</p>

                <p><strong>Location:</strong> {{$get_career_data->location}}</p>
                @if($get_career_data->certification != '' || $get_career_data->certification != null)
                    <p><strong>Certification:</strong> {{$get_career_data->certification}}</p>

                @endif
            </div>

            @if($get_career_data->roles_n_responsiblities != '' || $get_career_data->roles_n_responsiblities != null)
                <strong class="text_blue_about">ROLE &amp; RESPONSIBILITIES:</strong>
                {!! $get_career_data->roles_n_responsiblities !!}

            @endif

            @if($get_career_data->required_skills != '' || $get_career_data->required_skills != null)

                <strong class="text_blue_about">Required Skills</strong>
                {!! $get_career_data->required_skills !!}
            @endif

            @if($get_career_data->experience != '' || $get_career_data->experience != null)
                <strong class="text_blue_about">Experience:</strong>
                {!! $get_career_data->experience !!}

            @endif

            @if($get_career_data->job_description != '' || $get_career_data->job_description != null)

                <strong class="text_blue_about">Job Description:</strong>
                {!! $get_career_data->job_description !!}
            @endif

            @if($get_career_data->desired_skills != '' || $get_career_data->desired_skills != null)
                <strong class="text_blue_about">Desired Skills:</strong>
                {!! $get_career_data->desired_skills !!}
            @endif




            @if($get_career_data->academic_qualification != '' || $get_career_data->academic_qualification != null)
                <strong class="text_blue_about">Academic Qualification:</strong>
                {!! $get_career_data->academic_qualification !!}
            @endif





        </div>

    @endforeach

    <div style="" class="col-md-12 row button-box-text">
        {{$get_career->links() }}
    </div>

@endif