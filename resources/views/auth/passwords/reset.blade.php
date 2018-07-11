@extends('layout')

@section('meta-title', 'Reset Password')

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-6">
                <div class="box">
                    <h1 class="title">Reset Password</h1>

                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="field">
                            <label for="email" class="label">E-Mail Address</label>

                            <div class="control {{ $errors->has('email') ? 'has-icons-right' : '' }}">
                                <input id="email" type="email" class="input is-large {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="help is-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">Password</label>

                            <div class="control {{ $errors->has('password') ? 'has-icons-right' : '' }}">
                                <input id="password" type="password" class="input is-large {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="help is-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label for="password-confirm" class="label">Confirm Password</label>
                            <div class="control {{ $errors->has('password_confirmation') ? 'has-icons-right' : '' }}">
                                <input id="password-confirm" type="password" class="input is-large {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="help is-danger">
                                        {{ $errors->first('password_confirmation') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-primary">
                                    Reset Password
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
