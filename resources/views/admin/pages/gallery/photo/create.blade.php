@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Photo Gallery <small>Create</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form  action="/admin/gallery/photo/create" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Text <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="text" name="text"  class="form-control "  @if ($errors->has('text')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Custom Date<span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="date" id="article_link" name="custom_date"  class="form-control "  @if ($errors->has('custom_date')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <hr>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Banner <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 ">


                            <b>Main Image:</b>
                            <input type="file" id="image" name="image" class="form-control " @if ($errors->has('image')) style="border: 1px solid red"  @endif>

                        </div>



                        <div class="col-md-4 col-sm-4 ">


                            <b>Thumbnail:</b>
                            <input type="file" id="thumbnail" name="thumbnail" class="form-control" @if ($errors->has('thumbnail')) style="border: 1px solid red"  @endif >

                        </div>



                    </div>



                    <hr>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                        <div class="col-md-10 col-sm-10 ">
                            <input id="priority" class="form-control" type="number" min="0" name="priority" @if ($errors->has('priority')) style="border: 1px solid red"  @endif  >
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
                            <a href="/admin/gallery/photo/view" class="btn btn-primary" type="button">Go Back</a>
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