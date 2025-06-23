@extends('layouts.app')

@section('content')


<section class="gallery">
            <h1 class="gallery__title">Выполненные работы</h1>
            <div class="gallery__container container">
                <div class="card">
                    <img src="{{ asset('media/catalog/ванна/1.webp') }}" alt="">
                    <h3 class="card__title">Матовый потолок</h3>
                    <p class="card__type">Ванна</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/ванна/2.jpg') }}" alt="">
                    <h3p class="card__title">Сатиновый потолок</h3>
                    <p class="card__type">Ванна</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/ванна/3.jpg') }}" alt="">
                    <h3 class="card__title">Глянцевый потолок</h3>
                    <p class="card__type">Ванна</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/ванна/4.webp') }}" alt="">
                    <h3 class="card__title">Потолок с фотопечатью</h3>
                    <p class="card__type">Ванна</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/ванна/5.jpg') }}" alt="">
                    <h3 class="card__title">Фактурный потолок</h3>
                    <p class="card__type">Ванна</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <!-- гостинка -->
                <div class="card">
                    <img src="{{ asset('media/catalog/гостинная/1.webp') }}" alt="">
                    <h3 class="card__title">Матовый потолок</h3>
                    <p class="card__type">Гостинная</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/гостинная/2.webp') }}" alt="">
                    <h3p class="card__title">Сатиновый потолок</h3>
                    <p class="card__type">Гостинная</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/гостинная/3.webp') }}" alt="">
                    <h3 class="card__title">Глянцевый потолок</h3>
                    <p class="card__type">Гостинная</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/гостинная/4.webp') }}" alt="">
                    <h3 class="card__title">Потолок с фотопечатью</h3>
                    <p class="card__type">Гостинная</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/гостинная/5.webp') }}" alt="">
                    <h3 class="card__title">Фактурный потолок</h3>
                    <p class="card__type">Гостинная</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <!-- детская -->
                <div class="card">
                    <img src="{{ asset('media/catalog/детская/1.webp') }}" alt="">
                    <h3 class="card__title">Матовый потолок</h3>
                    <p class="card__type">Детская</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/детская/2.webp') }}" alt="">
                    <h3p class="card__title">Сатиновый потолок</h3>
                    <p class="card__type">Детская</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/детская/3.webp') }}" alt="">
                    <h3 class="card__title">Глянцевый потолок</h3>
                    <p class="card__type">Детская</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/детская/4.webp') }}" alt="">
                    <h3 class="card__title">Потолок с фотопечатью</h3>
                    <p class="card__type">Детская</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/детская/5.webp') }}" alt="">
                    <h3 class="card__title">Фактурный потолок</h3>
                    <p class="card__type">Детская</p>
                    <p class="card__price">1000 руб</p>
                </div>             
                    <!-- зал -->
                    <div class="card">
                        <img src="{{ asset('media/catalog/зал/1.webp') }}" alt="">
                        <h3 class="card__title">Матовый потолок</h3>
                        <p class="card__type">Зал</p>
                        <p class="card__price">1000 руб</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('media/catalog/зал/2.webp') }}" alt="">
                        <h3p class="card__title">Сатиновый потолок</h3>
                        <p class="card__type">Зал</p>
                        <p class="card__price">1000 руб</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('media/catalog/зал/3.webp') }}" alt="">
                        <h3 class="card__title">Глянцевый потолок</h3>
                        <p class="card__type">Зал</p>
                        <p class="card__price">1000 руб</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('media/catalog/зал/4.webp') }}" alt="">
                        <h3 class="card__title">Потолок с фотопечатью</h3>
                        <p class="card__type">Зал</p>
                        <p class="card__price">1000 руб</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('media/catalog/зал/5.webp') }}" alt="">
                        <h3 class="card__title">Фактурный потолок</h3>
                        <p class="card__type">Зал</p>
                        <p class="card__price">1000 руб</p>
                    </div>
                  <!-- коридор -->
                  <div class="card">
                    <img src="{{ asset('media/catalog/коридор/1.webp') }}" alt="">
                    <h3 class="card__title">Матовый потолок</h3>
                    <p class="card__type">Коридор</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/коридор/2.webp') }}" alt="">
                    <h3p class="card__title">Сатиновый потолок</h3>
                    <p class="card__type">Коридор</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/коридор/3.jpg') }}" alt="">
                    <h3 class="card__title">Глянцевый потолок</h3>
                    <p class="card__type">Коридор</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/коридор/4.webp') }}" alt="">
                    <h3 class="card__title">Потолок с фотопечатью</h3>
                    <p class="card__type">Коридор</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/коридор/5.webp') }}" alt="">
                    <h3 class="card__title">Фактурный потолок</h3>
                    <p class="card__type">Коридор</p>
                    <p class="card__price">1000 руб</p>
                </div>
                   <!-- кухня -->
                   <div class="card">
                    <img src="{{ asset('media/catalog/кухня/1.webp') }}" alt="">
                    <h3 class="card__title">Матовый потолок</h3>
                    <p class="card__type">Кухня</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/кухня/2.webp') }}" alt="">
                    <h3p class="card__title">Сатиновый потолок</h3>
                    <p class="card__type">Кухня</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/кухня/3.webp') }}" alt="">
                    <h3 class="card__title">Глянцевый потолок</h3>
                    <p class="card__type">Кухня</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/кухня/4.webp') }}" alt="">
                    <h3 class="card__title">Потолок с фотопечатью</h3>
                    <p class="card__type">Кухня</p>
                    <p class="card__price">1000 руб</p>
                </div>
                <div class="card">
                    <img src="{{ asset('media/catalog/кухня/5.webp') }}" alt="">
                    <h3 class="card__title">Фактурный потолок</h3>
                    <p class="card__type">Кухня</p>
                    <p class="card__price">1000 руб</p>
                </div>
                        <!-- спальня -->
                        <div class="card">
                            <img src="{{ asset('media/catalog/спальня/1.webp') }}" alt="">
                            <h3 class="card__title">Матовый потолок</h3>
                            <p class="card__type">Спальня</p>
                            <p class="card__price">1000 руб</p>
                        </div>
                        <div class="card">
                            <img src="{{ asset('media/catalog/спальня/2.webp') }}" alt="">
                            <h3p class="card__title">Сатиновый потолок</h3>
                            <p class="card__type">Спальня</p>
                            <p class="card__price">1000 руб</p>
                        </div>
                        <div class="card">
                            <img src="{{ asset('media/catalog/спальня/3.webp') }}" alt="">
                            <h3 class="card__title">Глянцевый потолок</h3>
                            <p class="card__type">Спальня</p>
                            <p class="card__price">1000 руб</p>
                        </div>
                        <div class="card">
                            <img src="{{ asset('media/catalog/спальня/4.webp') }}" alt="">
                            <h3 class="card__title">Потолок с фотопечатью</h3>
                            <p class="card__type">Спальня</p>
                            <p class="card__price">1000 руб</p>
                        </div>
                        <div class="card">
                            <img src="{{ asset('media/catalog/спальня/5.webp') }}" alt="">
                            <h3 class="card__title">Фактурный потолок</h3>
                            <p class="card__type">Спальня</p>
                            <p class="card__price">1000 руб</p>
                        </div>
            </div>
        </section>


@endsection