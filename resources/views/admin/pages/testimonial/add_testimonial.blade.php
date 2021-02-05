@extends('admin.layout.app')


@section('content')

    <div class="col-md-8 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Testimonial <small>Create</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('home_testimonial.save') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                    @csrf


                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Name</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="name" class="form-control" type="text" name="name"  @if ($errors->has('name')) style="border: 1px solid red"  @endif value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Position</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="position" class="form-control" type="text" name="position"  @if ($errors->has('position')) style="border: 1px solid red"  @endif value="{{old('position')}}">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea  id="description" name="description" id="" class="form-control"  @if ($errors->has('description')) style="border: 1px solid red"  @endif>{{old('description')}}</textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" id="image" name="image" class="form-control "  @if ($errors->has('image')) style="border: 1px solid red"  @endif>
                        </div>

                    </div>



                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
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
                            <a href="/admin/home/testimonial" class="btn btn-primary" type="button">Go Back</a>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection