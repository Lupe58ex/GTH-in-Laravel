@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-centered">
            <div class="card is-rounded">
                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <label class="label">Correo Electrónico</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" value="{{ old('email') }}" type="email" placeholder="Correo Electrónico" name="email" required>
                                <span class="icon is-small is-left">
                              <i class="fas fa-envelope"></i>
                            </span>
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">This email is invalid</p>
                            @endif
                        </div>
                        <div class="field">
                            <label class="label">Contraseña</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id="password" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" value="{{ old('password') }}" type="password" placeholder="Contraseña" name="password" required>
                                <span class="icon is-small is-left">
                              <i class="fas fa-key"></i>
                            </span>
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">This email is invalid</p>
                            @endif
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recuérdame
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="buttons">
                                <button type="submit" class="button is-primary is-fullwidth">
                                    <i class="fas fa-user"></i>&nbsp;
                                    <strong>Iniciar Sesión</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
