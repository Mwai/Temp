@extends('admin.layout')
@section('title')
Login
@stop
@section('content')
    <div class="container-fluid">
        <div class="Absolute-Center is-Responsive" id="login">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="login-form">
                    <div class="panel-body" >

                        @include('admin.partials.errors')

                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/auth/login') }}">
                            <legend> Login</legend>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="checkbox checkbox-styled checkbox-success">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-material-blue">Login</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <p class="or-social">Or Use Social Login</p>
                                    <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-sm  btn-block facebook" type="submit"><img src="/img/fb.png"/> Facebook</a>
                                    <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}" class="btn btn-sm  btn-block twitter" type="submit"><img src="/img/twr.png"/> Twitter</a>
                                    <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-sm  btn-block google" type="submit">Google</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection