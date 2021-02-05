@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <style>
        .dvalbtn {
            width: 100%;
            display: flex;
            flex-direction: row-reverse;
        }
    </style>

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Casebook <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('casebook_content_update.update',$case_id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf


                    <div id="containerdd">

                @if(isset($get_casebook_data))

                        @foreach($get_casebook_data as $key => $get_casebook_data_d)
                            <div id="casebook{{$key}}" class="cbdm col-md-10">
                              <div class="item form-group">
                                  <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Tab Name <span class="required">*</span>
                                  </label>
                                  <div class="col-md-10 col-sm-10 ">
                                      <input type="text" id="tab_name" name="tab_name[]" value="{{$get_casebook_data_d->tab_name}}" class="form-control "  @if ($errors->has('tab_name')) style="border: 1px solid red"  @endif>

                                  </div>

                              </div>

                              <div class="item form-group">
                                  <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Tab Content<span class="required">*</span>
                                  </label>
                                  <div class="col-md-10 col-sm-10 ">
                                      <textarea  id="text" name="tab_content[]" id="" class="form-control"  @if ($errors->has('tab_content')) style="border: 1px solid red"  @endif>{!! $get_casebook_data_d->tab_content !!}</textarea>
                                  </div>
                              </div>

                              <div class="item form-group">
                                  <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                                  <div class="col-md-10 col-sm-10 ">
                                      <input id="priority" class="form-control" type="number" min="0" name="priority[]"  @if ($errors->has('priority')) style="border: 1px solid red"  @endif value="{{$get_casebook_data_d->priority}}">
                                  </div>
                              </div>


                              <div class="dvalbtn">
                                  <a href="#"  class="btn btn-danger divdeletev">Delete </a>

                              </div>

                                <br>
                                <hr>
                                <br>



                            </div>



                        @endforeach
                        @endif

                    </div>



                    <div class="ln_solid"></div>



                    <div class="col-md-12">


                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="#" id="somebutton" class="btn btn-primary">Add More </a>

                            <a href="/admin/cms/view" class="btn btn-primary" type="button">Go Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
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


        $("#somebutton").click(function () {
            $("#containerdd").append('<div id="casebook" class="cbdm col-md-10">\n' +
                '                              <div class="item form-group">\n' +
                '                                  <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Tab Name <span class="required">*</span>\n' +
                '                                  </label>\n' +
                '                                  <div class="col-md-10 col-sm-10 ">\n' +
                '                                      <input type="text" id="tab_name" name="tab_name[]"  class="form-control "  >\n' +
                '\n' +
                '                                  </div>\n' +
                '\n' +
                '                              </div>\n' +
                '\n' +
                '                              <div class="item form-group">\n' +
                '                                  <label class="col-form-label col-md-2 col-sm-2 label-align" for="last-name">Tab Content<span class="required">*</span>\n' +
                '                                  </label>\n' +
                '                                  <div class="col-md-10 col-sm-10 ">\n' +
                '                                      <textarea  id="text" name="tab_content[]" id="" class="form-control" ></textarea>\n' +
                '                                  </div>\n' +
                '                              </div>\n' +
                '\n' +
                '                              <div class="item form-group">\n' +
                '                                  <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>\n' +
                '                                  <div class="col-md-10 col-sm-10 ">\n' +
                '                                      <input id="priority" class="form-control" type="number" min="0" name="priority[]"  >\n' +
                '                                  </div>\n' +
                '                              </div>\n' +
                '\n' +
                '\n' +
                '                              <div class="dvalbtn">\n' +
                '                                  <a href="#"  class="btn btn-danger divdeletev">Delete </a>\n' +
                '\n' +
                '                              </div>\n' +
                '\n' +
                '                                <br>\n' +
                '                                <hr>\n' +
                '                                <br>\n' +
                '\n' +
                '\n' +
                '\n' +
                '                            </div>\n');

            $('.divdeletev').on('click',function() {
                $(this).parent().parent().remove();

            });

            $("textarea").each(function(){
                CKEDITOR.inline( this );
            });

            $("html, body").animate({ scrollTop: $(document).height() }, "slow");

        });

            $('.divdeletev').on('click',function() {
                $(this).parent().parent().remove();

        });



    </script>

@endsection