@extends('admin.layout.app')


@section('content')

    <div class="col-md-8 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Newsboard <small>Update</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('home_newsboard.update',$get_newsboard_data->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                    @csrf


                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Title</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="title" class="form-control" type="text" name="title"  @if ($errors->has('title')) style="border: 1px solid red"  @endif value="{{$get_newsboard_data->title}}">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea  id="description" name="description" id="" class="form-control"  @if ($errors->has('description')) style="border: 1px solid red"  @endif>{{$get_newsboard_data->description}}</textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Event Date</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="event_date" class="form-control" type="date" name="event_date"  @if ($errors->has('event_date')) style="border: 1px solid red"  @endif value="{{$get_newsboard_data->event_date}}">
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/home/newsboard" class="btn btn-primary" type="button">Go Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection