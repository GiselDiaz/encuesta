<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="ThemeSelect">
    <title>Ingreso</title>
    <link rel="apple-touch-icon" href="{{ asset('genero/images/logo/legisfav.svg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('genero/images/logo/legisfav.svg') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/vendors/vendors.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/themes/vertical-menu-nav-dark-template/style.cs') }}s">
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/pages/login.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 1-column login-bg1  blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
<div class="row">
    <div class="col s12">
        <div class="container">
            <div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                    <form class="login-form center-align" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="">

                        </div>
                        <br>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="rfc" type="TEXT" class=" @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc') }}" autocomplete="rfc" autofocus>
                                <label for="rfc" class="center-align">{{ __('Usuario:') }}</label>
                                @error('rfc')
                                <small class="red-text ml-7">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                <label for="password">{{ __('Contraseña:') }}</label>
                                @error('password')
                                <small class="red-text ml-7">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn waves-effect waves-light border-round  col s12 bg-primary">Ingresar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>

<!-- BEGIN VENDOR JS-->
<script src="{{ asset('genero/js/vendors.min.js') }}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{ asset('genero/js/plugins.js') }}"></script>
<script src="{{ asset('genero/js/search.js') }}"></script>
<script src="{{ asset('genero/js/custom/custom-script.js') }}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>

</html>
