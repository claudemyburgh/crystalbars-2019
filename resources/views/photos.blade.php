@extends('layouts.app')

@section('content')
<div class="faq__section">

    <div class="wrapper">


      <div class="row">
        <div class="md-col-12">
                <div class="isotope text-align-center">
                    @foreach ($galleries as $gallery)
                        <div class="isotope--width">
                            <div class="panel__body background--primary color--white">
                                <h1>{{ $gallery->name }} Frames</h1>
                            </div>
                        </div>
                        @foreach ($gallery->getMedia('gallery') as $photo)
                            <div class="isotope--width">
                               <img src="{{ $photo->getFullUrl('thumb') }}" alt="">
                            </div>
                        @endforeach

                    @endforeach
                </div>
        </div>
      </div>



    </div>
</div>
@endsection

