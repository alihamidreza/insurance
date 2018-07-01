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
                                <form action="/addInsurance" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <label for="insurance">اضافه کردن بیمه نامه:</label>
                                    <select name="insurance[]" id="insurance" class="form-control" multiple>
                                        @foreach($insurances as $insurance)
                                            <option value="{{ $insurance->id }}" name="incop">{{ $insurance->name }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-sm btn-success">اضافه کردن</button>
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