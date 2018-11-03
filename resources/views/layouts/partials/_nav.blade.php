<div id="menu__nav">


    <div class="info__header">
        <div class="wrapper">
            <ul class="info__header__links">
                <li class="info__header__links__item"><a href="tel:0727554303">&#9742; 072 755 4303</a></li>
                <li class="info__header__links__item"><a href="mailto:info@crystalbars.co.za">&#9993; info@crystalbars.co.za</a></li>
            </ul>

        </div>
    </div>
    <nav class="nav">
        <div class="nav__wrapper">
            <div class="nav__brand"><a href="{{ url('/') }}">
                <img class="nav__brand__logo" src="{{ asset('img/logo.svg') }}" alt="">
            </a></div>
            <div class="nav__no__brand"></div>
            <div class="nav__navicon"></div>
            <div class="nav__links__wrapper nav__links--right">
                <ul class="nav__links">
                    <li class="nav__links__item"><a href="{{ url('/') }}">{{ __('menu.home') }}</a></li>
                    <li class="nav__links__item"><a href="{{ route('photos') }}">{{ __('menu.photos') }}</a></li>
                    {{-- <li class="nav__links__item"><a href="{{ url('/') }}">{{ __('menu.testimonials') }}</a></li> --}}
                    <li class="nav__links__item"><a href="{{ route('faq') }}">{{ __('menu.faq') }}</a></li>
                @guest
    {{--                         <li class="nav__links__item"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li class="nav__links__item"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
    --}}
                @else
                    <li class="nav__links__item nav__links__item--dropdown">
                    <a href="#">{{ Auth::user()->name }}</a>
                    <ul class="nav__links">
                        <li class="nav__links__item"><a href="{{ route('admin.index') }}">{{ __('menu.admin') }} </a></li>
                        <li class="nav__links__item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

                @endguest
                <li class="nav__links__button"><a class="btn btn--secondary-gradient pulse-button" href="{{ route('quote') }}">{{ __('menu.get_quote') }}</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
