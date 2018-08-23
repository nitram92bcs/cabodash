<!-- BEGIN REGISTRATION FORM -->
<form class="register-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
    @csrf
    <h3 class="font-red">Registro</h3>
    <p class="hint"> Introduce tu información personal aquí abajo: </p>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Full Name</label>
        <input id="name" type="text" class="placeholder-no-fix form-control{{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre Completo" required autofocus autocomplete="off">
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <input id="email" type="email" class="placeholder-no-fix form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required  autocomplete="off">
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <p class="hint"> Introduce tus credenciales abajo: </p>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <input type="password" autocomplete="off" id="register_password" placeholder="Contraseña" name="password" class="placeholder-no-fix form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-escribe to contraseña" name="rpassword" /> 
    </div>
    <div class="form-group margin-top-20 margin-bottom-20">
        <label class="mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="tnc" /> Estoy de Acuerdo con
            <a href="javascript:;">Terminos de Servicio </a> y
            <a href="javascript:;">Politicas de Privacidad </a>
            <span></span>
        </label>
        <div id="register_tnc_error"> </div>
    </div>
    <div class="form-actions">
        <button type="button" id="register-back-btn" class="btn red btn-outline">Atrás</button>
        <button type="submit" id="register-submit-btn" class="btn btn-danger uppercase pull-right">Registrar</button>
    </div>
</form>
<!-- END REGISTRATION FORM -->
