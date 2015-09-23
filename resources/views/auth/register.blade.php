@extends('admin.layout')
@section('title')
Register
@stop
@section('content')

    <div class="container-fluid" id="log-reg">
        <div class="Absolute-Center is-Responsive" id="register">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default id="login-form"">
                <div class="panel-body">

                    @include('admin.partials.errors')

                    <legend>Register</legend>
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/auth/register')}}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('first_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-material-blue">
                                    Register
                                </button>

                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection