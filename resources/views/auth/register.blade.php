@extends('master')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card col-md-12">
                        <div class="card-header row position-relative"><span class="float-right">{{ __('ثبت نام:') }}</span></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('ثبت نام:') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('نام:') }}</label>

                                    <div class="row">
                                        <input id="name" type="text"
                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="family"
                                           class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی:') }}</label>

                                    <div class="row">
                                        <input id="family" type="text"
                                               class="form-control{{ $errors->has('family') ? ' is-invalid' : '' }}"
                                               name="family" value="{{ old('family') }}" required autofocus>

                                        @if ($errors->has('family'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('family') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phonenumber"
                                           class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن:') }}</label>

                                    <div class="row">
                                        <input id="phonenumber" type="number"
                                               class="form-control{{ $errors->has('phonenumber') ? ' is-invalid' : '' }}"
                                               name="phonenumber" value="{{ old('phonenumber') }}" required autofocus>
                                        <small class="form-text text-muted">شماره تلفن را بدون صفر وارد کنید.</small>
                                        @if ($errors->has('phonenumber'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل:') }}</label>

                                    <div class="row">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="shenasname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('شماره شناسنامه:') }}</label>

                                    <div class="row">
                                        <input id="shenasname" type="number"
                                               class="form-control{{ $errors->has('shenasname') ? ' is-invalid' : '' }}"
                                               name="shenasname" value="{{ old('shenasname') }}" required>

                                        @if ($errors->has('shenasname'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('shenasname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور:') }}</label>

                                    <div class="row">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور:') }}</label>

                                    <div class="row">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class=" offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('ثبت نام') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <a href="/login" class="btn btn-outline-warning col-md-12">اکانت دارید؟ وارد شوید</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
