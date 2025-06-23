@extends('layouts.app')

@section('content')

<section class="found">
    <h1 class="found__title title">Где нас найти?</h1>
    <div class="found__container container">
        <img class="maps" src="{{ asset('media/Карта.png') }}" alt="">
        <div class="found__text"><p class="found__text">адрес: Россия, Москва, Кантемировская улица, 59А</p></div>
        <div class="found__text"><p class="found__text">телефон: +7-916-876-06-45</p></div>
        <div class="found__text"><p class="found__text">email: sky-pro@mail.ru</p></div>
    </div>
</section>

@endsection