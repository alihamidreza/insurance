@extends('admin.master')

@section('content')
    <div class="container">
        <div class="card" style="direction: rtl !important;text-align: right !important;">
            <div class="card-header bg-light">
                <span class="float-right">اضافه کردن بیمه نامه</span>
            </div>
            <div class="card-body">
                <form action="{{ route('insurances.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">نوع بیمه نامه</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="نوع بیمه نامه را وارد کنید" required>
                    </div>
                    <div class="form-group">
                        <label for="number">شماره بیمه نامه</label>
                        <input type="number" name="number" class="form-control" id="exampleInputPassword1" placeholder="شماره بیمه نامه را وارد کنید" required>
                    </div>
                    <button type="submit" class="btn btn-primary">اضافه کردن</button>
                </form>
            </div>
        </div>
    </div>
@endsection