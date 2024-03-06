@extends('layouts.app', [
    'namePage' => 'Register page',
    'activePage' => 'register',
    'backgroundImage' => asset('assets') . "/img/ParishConnect_Login.jpg",
])

@section('content')
<div class="content">
    <div class="d-flex justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-signup text-center">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Register') }}</h4>
                        </div>
                        <div class="card-body ">
                            <form method="POST" action="{{ route('register.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Name input -->
                                <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </div>
                                    </div>
                                    <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <!-- Email input -->
                                <div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </div>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <!-- Password input -->
                                <div class="input-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons objects_key-25"></i>
                                        </div>
                                    </div>
                                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <!-- Confirm password input -->
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons objects_key-25"></i>
                                        </div>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                </div>
                                <!-- User image input -->
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons media-2_sound-wave"></i>
                                        </div>
                                    </div>
                                    <input class="form-control" type="file" name="user_image">
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Get Started')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
@endpush
