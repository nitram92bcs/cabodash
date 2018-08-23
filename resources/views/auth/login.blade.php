@extends('layouts.metronic')
@section('title','Login')
@section('login')
<!-- BEGIN LOGO -->
        <div class="logo">
            <a href="/">
                <img src="/img/logo-platanito.png" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <h3 class="form-title font-red">RAEP Admin</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control-solid placeholder-no-fix form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo Electrónico"  autocomplete="off"/> 
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Contraseñ</label>
                    <input class="form-control-solid placeholder-no-fix form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required   type="password" id="password" autocomplete="off" placeholder="Contraseña" /> 
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="form-actions">
                        <button type="submit" class="btn red uppercase col-md-12" style="margin-bottom:15px;">Iniciar Sesión</button>
                        <label class="rememberme check mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuerdame') }}
                        <span></span>
                        </label>
                        <a href="javascript:;" id="forget-password" style="margin-bottom:15px;float:right;">¿Olvidaste tu contraseña?</a> 
                </div>
                {{-- <div class="login-options">
                    <h4>Or login with</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
                        </li>
                    </ul>
                </div> --}}
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Crear una cuenta</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            @include('auth.passwords.email')
            @include('auth.register')
        </div>
        <div class="copyright"> {{date('Y')}} &copy; Rancho Avicola El Platanito &nbsp;|&nbsp;Cabodash</div>
    @endsection
    @section('script')
    @parent
    <script src="{{asset('metronic/js/login.min.js')}}" type="text/javascript"></script>
    @endsection
