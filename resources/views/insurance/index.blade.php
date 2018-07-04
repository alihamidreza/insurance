@extends('master')

@section('content')

    <br><br>

    @if(auth()->check())

        <main class="py-4" style="direction: rtl;text-align: right;">
            <div class="row">
                <div class="container">
                    <div class="card col-md-12">
                        <div class="card-header row">اضافه کردن بیمه</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="yourInsurance" class="row">بیمه های شما:</label>
                                @if(count(auth()->user()->insurances) == 0)
                                    <span class="badge badge-danger p-2 pr-5 pl-5">شما بیمه ای ندارید</span>
                                @else
                                    @foreach(auth()->user()->insurances as $insurance)
                                        <span class="badge badge-light p-2 pr-5 pl-5">{{ $insurance->name }}</span>
                                        @if(! $loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <br>
                            <div class="row bg-light" style="height: 1px;"></div>
                            <br>
                            <div class="form-group">
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('noPrice'))
                                    <div class="alert alert-danger">
                                        {{ session('noPrice') }}
                                    </div>
                                @endif

                                @if(session('failed'))
                                    <div class="alert alert-danger">
                                        {{ session('failed') }}
                                    </div>
                                @endif

                                @if(session('cancel'))
                                    <div class="alert alert-warning">
                                        {{ session('cancel') }}
                                    </div>
                                @endif

                                @if(session('exist'))
                                    <div class="alert alert-warning">
                                        {{ session('exist') }}
                                    </div>
                                @endif

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="/insurance/payment" method="post">
                                    {{ csrf_field() }}
                                    <label for="insurance">اضافه کردن بیمه نامه:</label>
                                    <select name="insurance" id="insurance" class="form-control">
                                        <option value="" selected disabled>بیمه مورد نظر را انتخاب کنید</option>
                                        @foreach($insurances as $insurance)
                                            <option value="{{ $insurance->id }}" name="incop">  {{ $insurance->name }}
                                                | {{ $insurance->price }} تومان
                                            </option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-sm btn-success">خرید بیمه نامه</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    @else

        <main class="py-4">
            <div class="row">
                <div class="container">
                    <div class="card col-md-12">
                        <div class="card-header row"></div>
                        <div class="card-body">
                            <div class="form-group" style="direction: rtl;text-align: right;">
                                <div class="alert alert-danger">شما برای اضافه کردن بیمه باید وارد سایت شوید;</div>
                                <br>
                                <a href="/register" class="btn btn-outline-secondary">ثبت نام</a>
                                <a href="/login" class="btn btn-outline-success">ورود</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    @endif
@endsection