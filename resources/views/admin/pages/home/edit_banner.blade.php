@extends('admin.layout.app')


@section('content')

    <div class="col-md-8 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Banner <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('home_banner.update',$get_banner->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Banner <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" id="banner" name="banner" class="form-control "  @if ($errors->has('banner')) style="border: 1px solid red"  @endif>

                        </div>

                        <img width="100" height="100" class="d-block" src="/img/homebanner/{{$get_banner->banner}}" alt="First slide">
                    </div>

                    {{--@if ($errors->has('banner'))--}}
                    {{--<span class="text-danger">{{ $errors->first('banner') }}</span>--}}
                    {{--@endif--}}


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Responsive <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" id="responsive" name="responsive" class="form-control "  @if ($errors->has('responsive')) style="border: 1px solid red"  @endif>

                        </div>

                        <img width="100" height="100" class="d-block" src="/img/homebanner/responsive/{{$get_banner->responsive}}" alt="First slide">
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Text<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea  id="text" name="text" id="" class="form-control"  @if ($errors->has('text')) style="border: 1px solid red"  @endif>{{$get_banner->text}}</textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Para</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="para" class="form-control" type="text" name="para"  @if ($errors->has('para')) style="border: 1px solid red"  @endif value="{{$get_banner->para}}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">About Us Link</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="about_us_link" class="form-control" type="text" name="about_us_link"  @if ($errors->has('about_us_link')) style="border: 1px solid red"  @endif value="{{$get_banner->about_us_link}}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Download Brochure Link</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="know_more_link" class="form-control" type="text" name="know_more_link"  @if ($errors->has('know_more_link')) style="border: 1px solid red"  @endif value="{{$get_banner->know_more_link}}">
                        </div>
                    </div>



                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Priority</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="priority" class="form-control" type="number" min="0" name="priority"  @if ($errors->has('priority')) style="border: 1px solid red"  @endif value="{{$get_banner->priority}}">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                        <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" >

                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="1" {{$get_banner->status == 1? 'checked':''}}> &nbsp; Active &nbsp;
                                </label>

                                <label class="btn  btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="0" {{$get_banner->status == 0? 'checked':''}}> Deactive
                                </label>

                            </div>
                        </div>
                    </div>


                    <div class="ln_solid"></div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/home/banner" class="btn btn-primary" type="button">Go Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection


