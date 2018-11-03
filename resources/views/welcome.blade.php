@extends('layouts.app')

@section('content')

<section class="coolbox__section">
    <div class="wrapper">
        <div class="row coolbox__wrapper">
            <div class="md-col-4 coolbox">
                <header>
                    <i class="lunacon lunacon-shield lunacon--size-x5"></i>
                    <h1>Secure &amp; Strong</h1>
                    <p>Tha transparent bars material is virtually unbreakable and withstand a tremendous amount of force. They are flexible and have a tensile breaking strength of 3000kg.</p>

                </header>

            </div>
            <div class="md-col-4 coolbox">
                <header>
                    <i class="lunacon lunacon-gears lunacon--size-x5"></i>
                    <h1>Zero Maintanance</h1>
                    <p> They are UV coated on both sides to prevent them from discolouring in the direct sun. You will have clear burglar bars that will never rust and will never require any maintenance.</p>

                </header>

            </div>
            <div class="md-col-4 coolbox">
                <header>
                    <i class="lunacon lunacon-camera lunacon--size-x5"></i>
                    <h1>Photos Gallery</h1>
                    <p>With hundreds of home fitted with our product we done almost all kind of windows. View our photo gallery and see how the clear burgler bars will look on your style window.</p>

                </header>
                <footer class="coolbox__button__holder">
                    <a href="{{ route('photos') }}" class="coolbox__button">VIEW GALLARY</a>
                </footer>
            </div>

        </div>

        <div class="spacer--sm"></div>
        <div class="row">
            <div class="md-col-8">
                <div class="spacer--xs"></div>
                <h1>Transparent Burglar Bars</h1>
                <p>
                    Crystal Bars : For our clear burglar bars we use A- grade polycarbonate that is imported from Europe. The transparent burglar bar is 6mm in thickness and 35mm in width. The bars are bevelled on both sides so that there are no sharp edges that could cut you when opening the windows. They are UV coated on both sides to prevent them from discolouring in the direct sun.
                </p><p>
                    The burglar bars are totally transparent so you will have an unobstructed view and have the most stylish clear burglar bars that will never rust and will never require any maintenance. Unfortunately with all security systems none of them are 100% intruder proof. Burglar bars are only a deterrent and should keep out your intruder until your security company or police arrive at your house.
                </p>
            </div>
            <div class="md-col-4">
                <img src="{{ asset('img/stand.jpg') }}" alt="{{ config('app.name') }} stand" class="responsive__image image__shadow">
            </div>
        </div>
        <div class="spacer--sm"></div>
        <div class="row">
            <div class="md-col-4">
                <img src="{{ asset('img/van.jpg') }}" alt="{{ config('app.name') }} panel van" class="responsive__image image__shadow">
            </div>
            <div class="md-col-4">
                <img src="{{ asset('img/bakkie.jpg') }}" alt="{{ config('app.name') }} bakkie" class="responsive__image image__shadow">
            </div>
            <div class="md-col-4">
                <img src="{{ asset('img/trailer.jpg') }}" alt="{{ config('app.name') }} Trailer" class="responsive__image image__shadow">
            </div>
        </div>
        <div class="row">
            <div class="col text-align-center">
                <div class="spacer--xs"></div>
                <a href="{{ route('photos') }}" class="btn btn--lg btn--primary-gradient"> <i class="btn__icon--left lunacon--size-x2 lunacon lunacon-camera"></i> VIEW GALLERY</a>
            </div>
        </div>
    </div>
</section>

@include('layouts.partials._video')



@endsection
