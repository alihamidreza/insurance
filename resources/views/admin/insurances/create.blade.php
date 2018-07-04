@extends('admin.master')

@section('content')
    <div class="container">
        <div class="card" style="direction: rtl !important;text-align: right !important;">
            <div class="card-header bg-light">
                <span class="float-right">اضافه کردن بیمه نامه</span>
            </div>
            <div class="card-body">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>
                <form action="{{ route('insurances.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">نوع بیمه نامه</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required value="{{ old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="nameCreator">نام بیمه گزار</label>
                        <input type="text" name="nameCreator" class="form-control" id="exampleInputPassword1" required value="{{ old('nameCreator')}}">
                    </div>
                    <div class="form-group">
                        <label for="familyCreator">نام خانوادگی</label>
                        <input type="text" name="familyCreator" class="form-control" id="exampleInputPassword1" required value="{{ old('familyCreator')}}">
                    </div>
                    <div class="form-group">
                        <label for="typeCar">نوع ماشین</label>
                        <input type="text" name="typeCar" class="form-control" id="exampleInputPassword1" required value="{{ old('typeCar')}}">
                    </div>
                    <div class="form-group">
                        <label for="nameCar">نام خودرو</label>
                        <input type="text" name="nameCar" class="form-control" id="exampleInputPassword1" required value="{{ old('nameCar')}}">
                    </div>
                    <div class="form-group">
                        <label for="modelCar">مدل خودرو</label>
                        <input type="text" name="modelCar" class="form-control" id="exampleInputPassword1" required value="{{ old('modelCar')}}">
                    </div>
                    <div class="form-group">
                        <label for="createdYear">سال تولید خودرو</label>
                        <input type="number" name="createdYear" class="form-control" id="exampleInputPassword1" required value="{{ old('createdYear')}}">
                    </div>
                    <div class="form-group">
                        <label for="number">شماره موتور</label>
                        <input type="number" name="number" class="form-control" id="exampleInputPassword1" required value="{{ old('number')}}">
                    </div>
                    <div class="form-group">
                        <label for="VIN">کد VIN</label>
                        <input type="number" name="VIN" class="form-control" id="exampleInputPassword1" required value="{{ old('VIN')}}">
                    </div>
                    <div class="form-group">
                        <label for="startInsurance">تاریخ شروع بیمه</label>
                        <input type="date" name="startInsurance" class="form-control" id="exampleInputPassword1" required value="{{ old('startInsurance')}}">
                    </div>
                    <div class="form-group">
                        <label for="endInsurance">تاریخ انقضاء بیمه</label>
                        <input type="date" name="endInsurance" class="form-control" id="exampleInputPassword1" required value="{{ old('endInsurance')}}">
                    </div>
                    <div class="form-group">
                        <label for="price"> قیمت بیمه نامه | تومان</label>
                        <input type="price" name="price" class="form-control" id="exampleInputPassword1" required value="{{ old('price')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">اضافه کردن</button>
                </form>
            </div>
        </div>
    </div>
@endsection