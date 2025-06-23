<header class="header">
    <div class="header__container container">
        <a href="{{ url('/') }}"><img class="logo__img" src="{{ asset('media/i (3).webp') }}" alt=""></a>
        <nav class="nav__list">
            <li class="nav__item"><a href="{{ url('/') }}">О нас</a></li>
            <li class="nav__item"><a href="{{ url('/gallery') }}">Галерея</a></li>
            <li class="nav__item"><a href="{{ url('/renovation') }}">Ремонт</a></li>
            <li class="nav__item"><a href="{{ url('/calculator') }}">Калькулятор</a></li>
            <li class="nav__item"><a href="{{ url('/found') }}">Где нас найти?</a></li>
        </nav>
        <div class="reg__container container">
            @auth
                <a class="nav__item" href="#">Личный кабинет</a>
                <form method="POST" action="{{ route('logout') }}">
                    <style>
                        form .nav__item {
                        background: none;
                        border: none;
                        cursor: pointer;
                        font: inherit;
                        padding: 10px 15px;
                        color: black;
                        text-align: left;
                    }
                    </style>
                    @csrf
                    <button  type="submit" class="nav__item">Выход</button>
                </form>
            @else
                <a class="nav__item" href="{{ url('/registr') }}">Регистрация</a>
                <a class="nav__item" href="{{ url('/login') }}">Вход</a>
            @endauth
        </div>
    </div>
</header>
