<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}-登录</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

</head>

<body class="gray-bg">

<div class="middle-box text-center animated fadeInDown" id="app">
    <div>
        <h3>欢迎来到修店宝系统</h3>

        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('auth.username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('auth.Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{!! asset('js/vendor.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

</body>

</html>
