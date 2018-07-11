@extends('layout')

@section('nav')@endsection
@section('errors')@endsection

@section('meta-title', 'Register')

@section('content')
<section class="hero">
    <div class="hero-head">
        @include('partials.nav')
    </div>
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-centered">
                Start Creating and Managing Exclusive Chat Groups now!
            </h1>
            <p class="has-text-centered block">
                Already have an account ? <a href="{{ route('login') }}">Sign in</a>
            </p>
            <div class="columns is-centered">
                <div class="column">
                    <div class="box">
                        <h2 class="title is-4">
                            Register by email
                        </h2>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="field">
                                <label class="label" for="name">
                                    Name
                                </label>

                                <div class="control {{ $errors->has('name') ? 'has-icons-right' : '' }}">
                                    <input id="name"
                                        type="text"
                                        class="input is-large {{ $errors->has('name') ? 'is-danger' : '' }}"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="John Doe"
                                        required
                                        autofocus>

                                    @if ($errors->has('name'))
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="help is-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <label class="label" for="email">Email Address</label>

                                <div class="control {{ $errors->has('email') ? 'has-icons-right' : '' }}">
                                    <input id="email"
                                        type="email"
                                        class="input is-large {{ $errors->has('email') ? 'is-danger' : '' }}"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="john@coolgroup.club"
                                        required>

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
                                <label class="label" for="password">
                                    Password
                                </label>

                                <div class="control {{ $errors->has('password') ? 'has-icons-right' : '' }}">
                                    <input id="password"
                                        type="password"
                                        class="input is-large {{ $errors->has('password') ? 'is-danger' : '' }}"
                                        name="password"
                                        placeholder="●●●●●●●"
                                        required>

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
                                <label class="label" for="password-confirm">
                                    Password Confirmation
                                </label>

                                <div class="control">
                                    <input id="password-confirm"
                                        type="password"
                                        class="input is-large"
                                        name="password_confirmation"
                                        placeholder="●●●●●●●"
                                        required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="checkbox">
                                    <label class="checkbox">
                                        <input type="checkbox" name="terms" value="1">
                                        By Signing Up, you agree to the <a target="_blank" href="{{ route('privacy') }}">Privacy Policy</a> and the <a target="_blank" href="{{ route('terms') }}">Terms and Conditions</a>
                                    </label>
                                </div>
                                @if ($errors->has('terms'))
                                    <p class="help is-danger">
                                        {{ $errors->first('terms') }}
                                    </p>
                                @endif
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-primary is-large">
                                        Confirm Registration
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="box">
                        <h2 class="title is-4">
                            Or Sign Up with a social account
                        </h2>
                        <div class="field">
                            <div class="control">
                                <a href="/login/twitter" class="button is-fullwidth is-large is-info">
                                    <span class="icon">
                                        <font-awesome-icon :icon="['fab', 'twitter']" />
                                    </span>
                                    <span>Login with Twitter</span>
                                </a>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <a href="/login/github" class="button is-fullwidth is-large is-dark">
                                    <span class="icon">
                                        <font-awesome-icon :icon="['fab', 'github']" />
                                    </span>
                                    <span>Login with Github</span>
                                </a>
                            </div>
                        </div>
                        <p>
                            By Signing Up, you agree to the <a target="_blank" href="{{ route('privacy') }}">Privacy Policy</a> and the <a target="_blank" href="{{ route('terms') }}">Terms and Conditions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    @include('partials.fbchat')
@endsection
