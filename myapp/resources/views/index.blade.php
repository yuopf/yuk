@extends('layouts.app')

@section('content')

        <section class="about_us">
            <div class="about__container container">
                <h1 class="about__title">О нас</h1>
                <div class="slogan__container">
                    <img class="about__logo" src="{{ asset('media/i (3).webp') }}" alt="">
                    <h2 class="slogan__h2">Ваш потолок – наше вдохновение! Красота, качество и надежность — наш стандарт в каждом проекте!</h2>
                </div>
                <p class="description">
                    Компания "SkyPro" – опытная и быстро развивающаяся компания в сфере услуг...
                    <br><br>
                    <strong>Наш девиз:</strong> «Качество и скорость»<br>
                    <strong>Наше кредо:</strong> «Доброе имя важнее денег»<br>
                    <strong>Наш стиль:</strong> «Безупречность в работе»<br>
                    ...
                </p>
            </div>
        </section>

        <section class="slider">
            <h2 class="slider__title">Отзывы наших клиентов</h2>
            <div class="slider__container container">
                <div class="slider__wrapper">
                    <div class="slider__inner">
                        @foreach([
                            ['Анна', 'Спасибо огромное компании за блестяще выполненную работу...', '06.03.2023'],
                            ['Екатерина', 'Самая дешёвая цена! Все сделали очень быстро...', '07.05.2023'],
                            ['Александр', 'Хороший ремонт потолка - лучший показатель...', '20.06.2023'],
                            ['Лена', 'Спасибо вашим мастерам за проделанную работу...', '22.07.2023'],
                            ['Миша', 'Отлично организован рабочий процесс...', '08.09.2023'],
                        ] as [$name, $review, $date])
                            <div class="slide">
                                <p class="name">{{ $name }}</p>
                                <p class="review">{{ $review }}</p>
                                <p class="date">({{ $date }})</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="controls">
                        <button class="prev">❮</button>
                        <button class="next">❯</button>
                    </div>
                </div>
            </div>
            <script>
                const sliderInner = document.querySelector('.slider__inner');
                const slides = document.querySelectorAll('.slide');
                const prevBtn = document.querySelector('.prev');
                const nextBtn = document.querySelector('.next');
                let index = 0;
                let autoSlide;
        
                function updateSlider() {
                    sliderInner.style.transition = 'transform 0.5s ease-in-out';
                    sliderInner.style.transform = `translateX(${-index * 100}%)`;
                }
        
                function startAutoSlide() {
                    autoSlide = setInterval(() => {
                        index = (index + 1) % slides.length;
                        updateSlider();
                    }, 5000); 
                }
                
                function stopAutoSlide() {
                    clearInterval(autoSlide);
                }
        
                nextBtn.addEventListener('click', () => {
                    stopAutoSlide();
                    index = (index + 1) % slides.length;
                    updateSlider();
                    startAutoSlide();
                });
        
                prevBtn.addEventListener('click', () => {
                    stopAutoSlide();
                    index = (index - 1 + slides.length) % slides.length;
                    updateSlider();
                    startAutoSlide();
                });
        
                startAutoSlide();
                sliderInner.addEventListener('mouseover', stopAutoSlide);
                sliderInner.addEventListener('mouseout', startAutoSlide);
            </script>
        </section>
        @endsection
