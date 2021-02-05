@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Media <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('media.update',$get_media_data->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">User Image <span class="required">*</span>
                        </label>


                        <div class="col-md-4 col-sm-4 ">

                            <img style="margin-bottom: 1em;" width="200" height="150" class="d-block" src="{{$get_media_data->path.$get_media_data->file_name}}" alt="First slide">

                            <input type="file" id="file_name" name="file_name" class="form-control "  @if ($errors->has('file_name')) style="border: 1px solid red"  @endif>

                        </div>


                    </div>




                 


                    <div class="ln_solid"></div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/cms/view" class="btn btn-primary" type="button">Go Back</a>
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