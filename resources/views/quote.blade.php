@extends('layouts.app')

@section('content')

<section class="qoute__section">
    <div class="wrapper">
        <div class="row">
            <div class="md-col-8 md-offset-2">
                <div class="panel panel--default">
                    <header class="panel__header">GET A FREE QUOTE</header>

                    <div class="panel__body">

                        @if (session('status'))
                            <div class="form__group">
                                <div class="notify notify--success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        @endif

                        @if (session('errors'))
                            <div class="form__group">
                                <div class="notify notify--danger" role="alert">
                                    PLEASE REVIEW ERRORS
                                </div>
                            </div>
                        @endif
                        <form action="{{ route('send') }}" method="post">
                            @csrf

                            <div class="form__group  {{ $errors->has('name') ? ' has__danger' : '' }} ">
                                <label for="name" class="form__lable font--bold">NAME</label>
                                <input type="text" name="name" id="name" class="form__item" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <strong class="form__helper">
                                        {{ $errors->first('name') }}
                                    </strong>
                                @endif
                            </div>

                            <div class="form__group  {{ $errors->has('email') ? ' has__danger' : '' }} ">
                                <label for="email" class="form__lable font--bold">EMAIL ADDRESS</label>
                                <input type="email" name="email" id="email" class="form__item" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <strong class="form__helper">
                                        {{ $errors->first('email') }}
                                    </strong>
                                @endif
                            </div>

                            <div class="form__group  {{ $errors->has('phone') ? ' has__danger' : '' }} ">
                                <label for="phone" class="form__lable font--bold">PHONE NUMBER</label>
                                <input type="tel" name="phone" id="phone" class="form__item" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <strong class="form__helper">
                                        {{ $errors->first('phone') }}
                                    </strong>
                                @endif
                            </div>

                            <div class="form__group  {{ $errors->has('message') ? ' has__danger' : '' }} ">
                                <label for="message" class="form__lable font--bold">MESSAGE</label>
<textarea name="message" id="message" class="form__item" rows="6">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <strong class="form__helper">
                                        {{ $errors->first('message') }}
                                    </strong>
                                @endif
                            </div>

                            <div class="form__group">
                                <button type="submit" class="btn btn--lg btn--primary-gradient">
                                    <i class="lunacon lunacon-test lunacon--size-x2 btn__icon--left"></i> SEND QUOTE
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
