@extends('layouts.app')

@section('content')
<div class="faq__section">

    <div class="wrapper">


      <div class="row">
        <div class="md-col-12">
                <div class="isotope text-align-center">
                    @foreach ($galleries as $gallery)
                        <div class="isotope--width">
                            <div class="panel__body background--primary color--white image__shadow">
                                <h1>{{ title_case($gallery->name) }} Frames</h1>
                            </div>
                        </div>
                        @foreach ($gallery->getMedia('gallery') as $photo)
                            <div class="isotope--width">
                                <a href="{{ $photo->getFullUrl('preview') }}">
                                   <img class="image__shadow" src="{{ $photo->getFullUrl('thumb') }}" alt="{{ $photo->name }}">
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
        </div>
      </div>



    </div>
</div>
@endsection

