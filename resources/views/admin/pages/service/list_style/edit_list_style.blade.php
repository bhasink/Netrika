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
                <h2>Service List Style <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('services_list_style.update',$service_id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="service_cat" value="{{$cat}}">

                    <div id="containerdd">

                        @if(isset($get_list_style_data))

                            <div class=" col-md-10">

                                <br>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Headline <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 ">
                                        <input type="text" id="structure_one_title" name="structure_one_title" value="{{$structure_one_title}}" class="form-control "  @if ($errors->has('structure_one_title')) style="border: 1px solid red"  @endif>

                                    </div>

                                </div>

                            </div>

                            @foreach($get_list_style_data as $key => $get_list_style_data_text)
                                <div id="liststyle{{$key}}" class="cbdm col-md-10">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">List Style Text <span class="required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input type="text" id="list_text" name="list_text[]" value="{{$get_list_style_data_text->list_text}}" class="form-control "  @if ($errors->has('tab_name')) style="border: 1px solid red"  @endif required>

                                        </div>

                                    </div>


                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="priority" class="form-control" type="number" min="0" name="priority[]"  @if ($errors->has('priority')) style="border: 1px solid red"  @endif value="{{$get_list_style_data_text->priority}}" required>
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
                                <a href="#" id="somebutton" class="btn btn-primary">Add Block </a>

                                <a href="/admin/service/list-style/view" class="btn btn-primary" type="button">Go Back</a>
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
            $("#containerdd").append('  <div id="liststyle" class="cbdm col-md-10">\n' +
                '                                    <div class="item form-group">\n' +
                '                                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">List Style Text <span class="required">*</span>\n' +
                '                                        </label>\n' +
                '                                        <div class="col-md-10 col-sm-10 ">\n' +
                '                                            <input type="text" id="list_text" name="list_text[]"  class="form-control " required>\n' +
                '\n' +
                '                                        </div>\n' +
                '\n' +
                '                                    </div>\n' +
                '\n' +
                '\n' +
                '                                    <div class="item form-group">\n' +
                '                                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>\n' +
                '                                        <div class="col-md-10 col-sm-10 ">\n' +
                '                                            <input id="priority" class="form-control" type="number" min="0" name="priority[]"  required >\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '\n' +
                '\n' +
                '                                    <div class="dvalbtn">\n' +
                '                                        <a href="#"  class="btn btn-danger divdeletev">Delete </a>\n' +
                '\n' +
                '                                    </div>\n' +
                '\n' +
                '                                    <br>\n' +
                '                                    <hr>\n' +
                '                                    <br>\n' +
                '\n' +
                '\n' +
                '\n' +
                '                                </div>\n');

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