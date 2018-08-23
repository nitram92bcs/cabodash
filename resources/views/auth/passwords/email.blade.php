<!-- BEGIN FORGOT PASSWORD FORM -->
 <form class="forget-form" method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h3 class="font-red">¿Olvidaste tu contraseña?</h3>
    <p>Introduce tu correo electrónico y tu contraseña será restablecida</p>
    <div class="form-group">
        <input id="email" type="email" class="placeholder-no-fix form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" autocomplete="" off value="{{ old('email') }}" required>
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    </div>
    <div class="form-actions">
        <button type="button" id="back-btn" class="btn red btn-outline">Atras</button>
        <button type="submit" class="btn btn-danger uppercase pull-right">Recuperar</button>
    </div>
</form>
<!-- END FORGOT PASSWORD FORM -->
