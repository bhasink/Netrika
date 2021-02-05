@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Casebook <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('casebook.update',$get_casebook_data->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="title" name="title" value="{{$get_casebook_data->title}}" class="form-control "  @if ($errors->has('title')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Short Description <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="short_des_main" name="short_des_main" value="{{$get_casebook_data->short_des_main}}" class="form-control "  @if ($errors->has('short_des_main')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">

                            <select name="service_category_id" id="service_category_id" class="form-control ">


                                @if(isset($get_casebook_data))
                                    @foreach($get_casebook_data->get_all_service_category() as $key => $get_all_service_category_d)

                                        <option value="{{$get_all_service_category_d->id}}" {{$get_casebook_data->service_category_id == $get_all_service_category_d->id? 'selected':''}}>{{$get_all_service_category_d->name}}</option>

                                    @endforeach

                                @endif




                            </select>


                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Banner <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 ">

                            <img style="margin-bottom: 1em;" width="250" height="150" class="d-block" src="/img/case-studies/banner/{{$get_casebook_data->banner}}" alt="First slide">
                            <b>Desktop:</b>
                            <input type="file" id="banner" name="banner" class="form-control "  @if ($errors->has('banner')) style="border: 1px solid red"  @endif>

                        </div>

                        @if ($errors->has('banner'))
                            <span class="text-danger">{{ $errors->first('banner') }}</span>
                        @endif

                        <div class="col-md-4 col-sm-4 ">

                            <img style="margin-bottom: 1em;" width="250" height="150" class="d-block" src="/img/case-studies/banner/res/{{$get_casebook_data->banner_res}}" alt="First slide">
                            <b>Responsive:</b>
                            <input type="file" id="banner_res" name="banner_res" class="form-control "  @if ($errors->has('banner_res')) style="border: 1px solid red"  @endif>

                        </div>



                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 ">

                            <img style="margin-bottom: 1em;" width="250" height="150" class="d-block" src="/img/case-studies/{{$get_casebook_data->thumbnail}}" alt="First slide">
                            <b>Thumbnail:</b>
                            <input type="file" id="thumbnail" name="thumbnail" class="form-control "  @if ($errors->has('thumbnail')) style="border: 1px solid red"  @endif>

                        </div>

                        @if ($errors->has('thumbnail'))
                            <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                        @endif




                    </div>



                    <hr>

                    <br>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta Title <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_title" name="meta_title" value="{{$get_casebook_data->meta_title}}" class="form-control "  @if ($errors->has('meta_title')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta Description <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_description" name="meta_description" value="{{$get_casebook_data->meta_description}}" class="form-control "  @if ($errors->has('meta_description')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta 	Keywords <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_keywords" name="meta_keywords" value="{{$get_casebook_data->meta_keywords}}" class="form-control "  @if ($errors->has('meta_keywords')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <br>

                    <hr>

                    <br>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                        <div class="col-md-10 col-sm-10 ">
                            <input id="priority" class="form-control" type="number" min="0" name="priority"  @if ($errors->has('priority')) style="border: 1px solid red"  @endif value="{{$get_casebook_data->priority}}">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align">Status</label>
                        <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" >

                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="1" {{$get_casebook_data->status == 1? 'checked':''}}> &nbsp; Active &nbsp;
                                </label>

                                <label class="btn  btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="0" {{$get_casebook_data->status == 0? 'checked':''}}> Deactive
                                </label>

                            </div>
                        </div>
                    </div>


                    <div class="ln_solid"></div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/casebook/view" class="btn btn-primary" type="button">Go Back</a>
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