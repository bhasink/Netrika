@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Service <small>Create</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="/admin/services/create" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="name" name="name" class="form-control " value="{{old('name')}}" @if ($errors->has('name'))  style="border: 1px solid red"  @endif>

                        </div>

                    </div>



                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Banner <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 ">


                            <b>Desktop:</b>
                            <input type="file" id="banner_image" name="banner_image" class="form-control "  @if ($errors->has('banner_image')) style="border: 1px solid red"  @endif>

                        </div>

                        {{--@if ($errors->has('banner_image'))--}}
                            {{--<span class="text-danger">{{ $errors->first('banner_image') }}</span>--}}
                        {{--@endif--}}

                        <div class="col-md-4 col-sm-4 ">


                            <b>Responsive:</b>
                            <input type="file" id="banner_image_res" name="banner_image_res" class="form-control "  @if ($errors->has('banner_image_res')) style="border: 1px solid red"  @endif>

                        </div>



                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">

                            <select name="service_category_id" id="service_category_id" class="form-control ">


                                @if(isset($get_service_data))
                                    @foreach($get_service_data->get_all_service_category() as $key => $get_all_service_category_d)

                                        <option value="{{$get_all_service_category_d->id}}">{{$get_all_service_category_d->name}}</option>

                                    @endforeach

                                @endif




                            </select>


                        </div>

                    </div>


                    <hr>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Main Content<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <textarea  id="text" name="main_content" id="" class="form-control"  @if ($errors->has('main_content')) style="border: 1px solid red"  @endif>{{old('main_content')}}</textarea>
                        </div>
                    </div>

                    <hr @if ($errors->has('main_content')) style="border: 1px solid red"  @endif>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Service Expert <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">

                            <select multiple name="experts_user_id[]" id='e1' style="width: 100%;">

                                @if(isset($get_service_data))
                                    @foreach($get_service_data->get_all_expert() as $key => $exp_value)

                                        <option value="{{$exp_value->id}}" >{{$exp_value->name}}</option>

                                    @endforeach
                                @endif


                            </select>


                        </div>

                    </div>

                    <hr @if ($errors->has('experts_user_id')) style="border: 1px solid red"  @endif>

                    {{--<div class="item form-group">--}}
                    {{--<label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Responsive <span class="required">*</span>--}}
                    {{--</label>--}}
                    {{--<div class="col-md-4 col-sm-4 ">--}}
                    {{--<input type="file" id="responsive" name="responsive" class="form-control "  @if ($errors->has('responsive')) style="border: 1px solid red"  @endif>--}}

                    {{--</div>--}}

                    {{--<img width="250" height="150" class="d-block" src="/img/services/banner/res/{{$get_service_data->banner_image_res}}" alt="First slide">--}}
                    {{--</div>--}}



                    <br>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta Title <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="name" name="meta_title"  class="form-control " value="{{old('meta_title')}}" @if ($errors->has('meta_title')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta Description <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_description" name="meta_description" value="{{old('meta_description')}}" class="form-control "  @if ($errors->has('meta_description')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Meta 	Keywords <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="meta_keywords" name="meta_keywords"  class="form-control " value="{{old('meta_keywords')}}" @if ($errors->has('meta_keywords')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <br>

                    <hr>

                    <br>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                        <div class="col-md-10 col-sm-10 ">
                            <input id="priority" class="form-control" type="number" min="0" name="priority" value="{{old('priority')}}" @if ($errors->has('priority')) style="border: 1px solid red"  @endif >
                        </div>
                    </div>


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
                            <a href="/admin/services/view" class="btn btn-primary" type="button">Go Back</a>
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