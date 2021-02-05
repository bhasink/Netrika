@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Career <small>Create</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                {{--@if($errors->any())--}}
                    {{--{!! implode('', $errors->all('<div>:message</div>')) !!}--}}
                {{--@endif--}}

                <br />
                <form action="/admin/career/create" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="position" name="position"  class="form-control " value="{{old('position')}}"  @if ($errors->has('position')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Type <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="type" name="type"  class="form-control " value="{{old('type')}}"  @if ($errors->has('type')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Designation <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="designation" name="designation" class="form-control " value="{{old('designation')}}"  @if ($errors->has('designation')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>



                    {{--<div class="item form-group">--}}
                        {{--<label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Department <span class="required">*</span>--}}
                        {{--</label>--}}
                        {{--<div class="col-md-10 col-sm-10 ">--}}
                            {{--<input type="text" id="department" name="department"  class="form-control "  @if ($errors->has('department')) style="border: 1px solid red"  @endif>--}}

                        {{--</div>--}}

                    {{--</div>--}}







                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Certification <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="certification" name="certification" class="form-control " value="{{old('certification')}}" @if ($errors->has('certification')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Department <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">

                            <select name="career_department_id" id="career_department_id" class="form-control">

                                @foreach($get_career_data->get_all_career_department() as $key=>$all_career_department)

                                    <option value="{{$all_career_department->id}}" >{{$all_career_department->name}}</option>

                                @endforeach



                            </select>

                        </div>

                    </div>



                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Position <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">

                            <select name="career_pos_id" id="career_pos_id" class="form-control ">

                                @foreach($get_career_data->get_all_career_position() as $key=>$all_career_position)

                                    <option value="{{$all_career_position->id}}" >{{$all_career_position->name}}</option>

                                @endforeach



                            </select>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Location <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">

                            <select  multiple name="career_location_id[]" id='e1' style="width: 100%;">

                                @if(isset($get_career_data))
                                    @foreach($get_career_data->get_all_career_location() as $key => $get_all_career_location_data)

                                        <option value="{{$get_all_career_location_data->id}}"  >{{$get_all_career_location_data->name}}</option>

                                    @endforeach
                                @endif



                            </select>


                        </div>

                    </div>




                    <hr @if ($errors->has('career_location_id')) style="border: 1px solid red"  @endif>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Job Description<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <textarea  id="job_description" name="job_description" id="job_description" class="form-control"  @if ($errors->has('job_description')) style="border: 1px solid red"  @endif>{{old('job_description')}}</textarea>
                        </div>
                    </div>


                    <hr @if ($errors->has('job_description')) style="border: 1px solid red"  @endif>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Experience<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <textarea  id="experience" name="experience" class="form-control"  >{{old('experience')}}</textarea>
                        </div>
                    </div>

                    <hr @if ($errors->has('experience')) style="border: 1px solid red"  @endif>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Roles and Responsiblity<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <textarea  id="roles_n_responsiblities" name="roles_n_responsiblities" class="form-control"  @if ($errors->has('roles_n_responsiblities')) style="border: 1px solid red"  @endif>{{old('roles_n_responsiblities')}}</textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Required Skills<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <textarea  id="required_skills" name="required_skills" class="form-control"  @if ($errors->has('required_skills')) style="border: 1px solid red"  @endif>{{old('required_skills')}}</textarea>
                        </div>
                    </div>

                    <hr>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Academic Qualification<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <textarea  id="academic_qualification" name="academic_qualification" class="form-control"  @if ($errors->has('academic_qualification')) style="border: 1px solid red"  @endif>{{old('academic_qualification')}}</textarea>
                        </div>
                    </div>



                    <hr>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align">Status</label>
                        <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" >

                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="1" checked> &nbsp; Active &nbsp;
                                </label>

                                <label class="btn  btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="0" > Deactive
                                </label>

                            </div>
                        </div>
                    </div>


                    <div class="ln_solid"></div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/career/view" class="btn btn-primary" type="button">Go Back</a>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>

    <script>
        $("#e1").select2({closeOnSelect:false});

    </script>

@endsection