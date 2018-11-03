

<section class="profile__section">
    {{-- <canvas id="bars" width="100" height="800"></canvas> --}}
    <div class="wrapper">
        <div class="row">
            <div class="col text-align-center">
                <h1 class="text--primary">The "A Team" is waiting for you</h1>
                <h3 class="text--primary">CONTACT US TO QOUTE FOR YOUR CRYSTAL BARS</h3>
            </div>
        </div>
        <div class="row profile__flex">
            <div class="profile">
                <div class="profile__image">
                    <img src="{{ asset('img/luis.jpg') }}" alt="Luis Pechau at Crystal Bars">
                </div>
                <div class="profile__details">
                    <div>
                        <h1>Luis <br><strong>Pechau</strong></h1>
                        <ul class="profile__details__list">
                            <li class="profile__details__list__item"><a href="tel:0727554303">&#9742; 072 755 4303</a></li>
                            <li class="profile__details__list__item"><a href="mailto:luis@crystalbars.co.za">&#9993; luis@crystalbars.co.za</a></li>
                        </ul>

                    </div>
                        <ul class="links__inline">
                         <li class="links__inline__item"><a href="https://www.facebook.com/www.crystalbars.co.za/" target="_blank" class="btn btn--white text--primary"> <i class="lunacon lunacon-facebook"></i> </a></li>
{{--                          <li class="links__inline__item"><a class="btn btn--white text--primary"> <i class="lunacon lunacon-google-plus"></i> </a></li>
                         <li class="links__inline__item"><a class="btn btn--white text--primary"> <i class="lunacon lunacon-linkedin"></i> </a></li> --}}
                        </ul>
                </div>
            </div>
            <div class="profile">
                <div class="profile__image">
                    <img src="{{ asset('img/hendry.jpg') }}" alt=" Hendry Ollewagen at Crystal Bars">
                </div>
                <div class="profile__details">
                    <div>

                        <h1>Hendry <br> <strong>Ollewagen</strong></h1>
                        <ul class="profile__details__list">
                            <li class="profile__details__list__item"><a href="tel:0794912812">&#9742; 079 491 2812</a></li>
                            <li class="profile__details__list__item"><a href="mailto:hendry@crystalbars.co.za">&#9993; hendry@crystalbars.co.za</a></li>
                        </ul>
                    </div>
                        <ul class="links__inline">
                         <li class="links__inline__item"><a href="https://www.facebook.com/www.crystalbars.co.za/" target="_blank" class="btn btn--white text--primary"> <i class="lunacon lunacon-facebook"></i> </a></li>
{{--                          <li class="links__inline__item"><a class="btn btn--white text--primary"> <i class="lunacon lunacon-google-plus"></i> </a></li>
                         <li class="links__inline__item"><a class="btn btn--white text--primary"> <i class="lunacon lunacon-linkedin"></i> </a></li> --}}
                        </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-align-center">
                <p><a href="{{ route('quote') }}" class="btn btn--xl btn--secondary-gradient pulse-button"> <i class="btn__icon--left lunacon--size-x2 lunacon lunacon-test"></i> GET QUOTE NOW</a></p>
            </div>
        </div>
    </div>
</section>
