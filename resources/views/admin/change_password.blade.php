@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Change Password <small></small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div>

                    <p style="color: red;">
                        @if(Session::has('error'))
                            {{ Session::get('error') }}
                        @endif
                    </p>

                </div>

                <div>
                    <p style="color: green;">
                        @if(Session::has('success'))
                            {{ Session::get('success') }}
                        @endif
                    </p>
                </div>

                <br />
                <form action="{{ route('update-password') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="form-group row">
                        <label for="old_password" class="col-md-2 col-form-label">{{ __('Current password') }}</label>
                        <div class="col-md-6">
                            <input id="old_password" name="old_password" type="password" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="new_password" class="col-md-2 col-form-label">{{ __('New password') }}</label>
                        <div class="col-md-6">
                            <input id="new_password" name="new_password" type="password" class="form-control" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirm" class="col-md-2 col-form-label">{{ __('Confirm password') }}</label>

                        <div class="col-md-6">
                            <input id="password_confirmation" name="new_password_confirmation" type="password" class="form-control" required
                                   autofocus>
                        </div>
                    </div>
                    <div class="form-group login-row row mb-0">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-success">
                                {{ __('Update') }}
                            </button>
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


