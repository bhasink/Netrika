@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Team <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('team.update',$get_team_data->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="name" name="name" value="{{$get_team_data->name}}" class="form-control "  @if ($errors->has('name')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Designation <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="designation" name="designation" value="{{$get_team_data->designation}}" class="form-control "  @if ($errors->has('designation')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Certifications <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="certifications" name="certifications" value="{{$get_team_data->certifications}}" class="form-control "  @if ($errors->has('certifications')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Experience	 <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="experience" name="experience" value="{{$get_team_data->experience}}" class="form-control "  @if ($errors->has('experience')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Expert In	 <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="expert_in" name="expert_in" value="{{$get_team_data->expert_in	}}" class="form-control "  @if ($errors->has('expert_in')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Email	 <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="email" name="email" value="{{$get_team_data->email	}}" class="form-control "  @if ($errors->has('email')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>



                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Phone	 <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="email" name="phone" value="{{$get_team_data->phone	}}" class="form-control "  @if ($errors->has('phone')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Quotes	 <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="quotes" name="quotes" value="{{$get_team_data->quotes}}" class="form-control "  @if ($errors->has('quotes')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Linkedin URL <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="linkedin" name="linkedin" value="{{$get_team_data->linkedin}}" class="form-control "  @if ($errors->has('linkedin')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <hr>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <textarea  id="text" name="description" id="description" class="form-control"  @if ($errors->has('description')) style="border: 1px solid red"  @endif>{!! $get_team_data->description !!}</textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">User Image <span class="required">*</span>
                        </label>


                        <div class="col-md-4 col-sm-4 ">

                            <img style="margin-bottom: 1em;" width="200" height="150" class="d-block" src="/img/team/page/{{$get_team_data->user_image}}" alt="First slide">

                            <input type="file" id="user_image" name="user_image" class="form-control "  @if ($errors->has('user_image')) style="border: 1px solid red"  @endif>

                        </div>


                    </div>

                    <hr>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">PDF Data <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input class="form-control"  type="text" value="{{$get_team_data->pdf_data}}" readonly>
                            <input type="file" id="pdf_data" name="pdf_data" class="form-control "  @if ($errors->has('pdf_data')) style="border: 1px solid red"  @endif>
                        </div>

                    </div>





                    <hr>

                    <br>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta Title <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_title" name="meta_title" value="{{$get_team_data->meta_title}}" class="form-control "  @if ($errors->has('meta_title')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta Description <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_description" name="meta_description" value="{{$get_team_data->meta_description}}" class="form-control "  @if ($errors->has('meta_description')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta 	Keywords <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_keywords" name="meta_keywords" value="{{$get_team_data->	meta_keywords}}" class="form-control "  @if ($errors->has('meta_description')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <br>

                    <hr>

                    <br>


                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                        <div class="col-md-10 col-sm-10 ">
                            <input id="priority" class="form-control" type="number" min="0" name="priority"  @if ($errors->has('priority')) style="border: 1px solid red"  @endif value="{{$get_team_data->priority}}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align">Status</label>
                        <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" >

                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="1" {{$get_team_data->status == 1? 'checked':''}}> &nbsp; Active &nbsp;
                                </label>

                                <label class="btn  btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="0" {{$get_team_data->status == 0? 'checked':''}}> Deactive
                                </label>

                            </div>
                        </div>
                    </div>


                    <div class="ln_solid"></div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/team/view" class="btn btn-primary" type="button">Go Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
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