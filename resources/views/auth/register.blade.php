@extends('front.temp')
@section('title') Kayıt Ol @endsection
@section('css')@endsection
@section('master')
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li class="active">Kayıtol</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--register-starts-->
<div class="register">
    <div class="container">
        <div class="register-top heading">
            <h2>Kayıt Ol</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register-main">
                <div class="col-md-6 account-left">
                    <input id="name" name="name" class="@error('name') is-invalid @enderror" autofocus placeholder="Adınızı giriniz" type="text" value="{{ old('name') }}" tabindex="1" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id="email" name="email" class="@error('email') is-invalid @enderror" placeholder="Email giriniz" type="text" value="{{ old('email') }}" tabindex="3" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 account-left">
                    <input id="password" placeholder="Şifre giriniz" type="password" class="@error('password') is-invalid @enderror" tabindex="4" name="password" required>
                    <input id="password-confirm" name="password_confirmation" placeholder="Tekrar şifre giriniz" type="password" tabindex="4" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="address submit">
                <input type="submit" value="Kayıt Ol">
            </div>
        </form>
    </div>
</div>
<!--register-end-->
<!-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
@section('js')@endsection