        <div class="mail-chimp">
            <div class="wrapper">
                <div class="row">
                    <div class="md-col-8 md-offset-2">
                        <div class="row">
                            <div class="md-col-12 text-align-center">
                                <h2 class="text--dark">SUBSCRIBE TO OUR NEWSLETTER</h2>
                                <h3 class="text--white">To get news of upcomming offers and events.</h3>
                            </div>

                            @if(session('note'))
                                <div class="md-col-12">
                                    <div class="notify notify__dismissable notify--info"> {{ session('note') }} </div>
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="md-col-12">
                                    <div class="notify notify__dismissable notify--success"> {{ session('success') }} </div>
                                </div>
                            @endif

                            <form action="{{ route('subscribe') }}" method="post">
                                @csrf
                                <div class="md-col-4">
                                    <div class="form__group {{ $errors->has('name') ? ' has__danger' : '' }} ">
                                        <input type="text" class="form__item" name="name" placeholder="Name" value="{{ old('name') }}">
                                        @if($errors->has('name'))
                                            <small class="notify notify__dismissable notify--danger-light"> {{ $errors->first('name') }} </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="md-col-4">
                                    <div class="form__group {{ $errors->has('email') ? ' has__danger' : '' }}">
                                        <input type="text" class="form__item" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @if($errors->has('name'))
                                            <small class="notify notify__dismissable notify--danger-light"> {{ $errors->first('email') }} </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="md-col-4">
                                    <div class="form__group">
                                        <button type="submit" class="btn btn--dark-gradient btn--block">SUBSCRIBE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
