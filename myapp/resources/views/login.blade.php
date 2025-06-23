@extends('layouts.app')

@section('content')

<div class="auth-container">
        @if (session('error'))
            <div class="alert error">{{ session('error') }}</div>
        @endif
        <form id="formAut" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" id="email" name="email" required placeholder="email" value="{{ old('email') }}">
                <span id="emailError" class="error-message">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required placeholder="Пароль">
                <span id="passwordError" class="error-message">@error('password') {{ $message }} @enderror</span>
            </div>
            <div>
                <button class="button-reg1" type="submit">Войти</button>
            </div>
        </form>
    </div>

@endsection