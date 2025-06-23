@extends('layouts.app')

@section('content')

<div class="container registration__account">
            <form id="form" method="POST" action="{{ url('/registr') }}">
                @csrf
                <div class="div-registration">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" placeholder="Ваше имя">
                    <span class="error" id="nameError"></span>
                </div>
                <div class="div-registration">
                    <label for="surname">Фамилия</label>
                    <input type="text" id="surname" name="surname" placeholder="Ваша фамилия">
                    <span class="error" id="surnameError"></span>
                </div>
                <div class="div-registration">
                    <label for="login">Логин</label>
                    <input type="text" id="login" name="login" placeholder="Придумайте логин" >
                    <span class="error" id="loginError"></span>
                </div>
                <div class="div-registration">
                    <label for="email">Почта</label>
                    <input type="email" id="mail" name="mail" placeholder="example@mail.com">
                    <span class="error" id="mailError"></span>
                </div>
            <div class="div-registration">
                <label for="phone">Телефон</label>
                <input type="tel" id="phone" name="phone" placeholder="+7-(XXX)XXX-XX-XX">
                <span class="error" id="phoneError"></span>
            </div>
            <div class="div-registration">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="Не менее 8 символов">
                <span class="error" id="passwordError"></span>
            </div>
            <div class="div-registration">
                <label for="confirmPassword">Повторите пароль</label>
                <input type="password" id="passwordRepeat" name="password_confirmation">
                <span class="error" id="passwordRepeatError"></span>
            </div>
            <div class="container__checkbox">
                <input type="checkbox" id="agreement">
                <label for="agreement">Согласен с обработкой персональных данных</label>
            </div>
            <div>
                <button class="button-reg" type="submit">Зарегистрироваться</button>
            </div>
        </form>

    </div>
    <script src="{{ asset('script.js') }}"></script>

@endsection