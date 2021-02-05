@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Quotes <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('quotes.update',$get_quotes_data->id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="name" name="name" value="{{$get_quotes_data->name}}" class="form-control "  @if ($errors->has('name')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>




                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Designation <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="designation" name="designation" value="{{$get_quotes_data->designation}}" class="form-control "  @if ($errors->has('designation')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Quote <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">
                            <input type="text" id="quotes" name="quotes" value="{{$get_quotes_data->quotes}}" class="form-control "  @if ($errors->has('quotes')) style="border: 1px solid red"  @endif>

                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Quote Team <span class="required">*</span>
                        </label>
                        <div class="col-md-10 col-sm-10 ">

                            <select name="team_id" id="team_id" class="form-control ">


                                @if(isset($get_quotes_data))
                                    @foreach($get_quotes_data->get_all_team() as $key => $get_all_service_category_d)

                                        <option value="{{$get_all_service_category_d->id}}" {{$get_all_service_category_d->id == $get_quotes_data->team_id ? 'selected':''}}>{{$get_all_service_category_d->name}}</option>

                                    @endforeach

                                @endif




                            </select>


                        </div>

                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">User Image <span class="required">*</span>
                        </label>


                        <div class="col-md-4 col-sm-4 ">

                            <img style="margin-bottom: 1em;" width="200" height="150" class="d-block" src="/img/team/quotes/{{$get_quotes_data->user_image}}" alt="First slide">

                            <input type="file" id="user_image" name="user_image" class="form-control "  @if ($errors->has('user_image')) style="border: 1px solid red"  @endif>

                        </div>


                    </div>


                    <hr>

                    <br>


                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                        <div class="col-md-10 col-sm-10 ">
                            <input id="priority" class="form-control" type="number" min="0" name="priority"  @if ($errors->has('priority')) style="border: 1px solid red"  @endif value="{{$get_quotes_data->priority}}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-2 col-sm-2 label-align">Status</label>
                        <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" >

                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="1" {{$get_quotes_data->status == 1? 'checked':''}}> &nbsp; Active &nbsp;
                                </label>

                                <label class="btn  btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="status" value="0" {{$get_quotes_data->status == 0? 'checked':''}}> Deactive
                                </label>

                            </div>
                        </div>
                    </div>


                    <div class="ln_solid"></div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="/admin/quotes/view" class="btn btn-primary" type="button">Go Back</a>
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