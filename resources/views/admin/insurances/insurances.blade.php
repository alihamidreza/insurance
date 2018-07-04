@extends('admin.pdf')

@section('content')


    <table class="table table-bordered table-responsive-sm">
        <thead class="thead-light">
        <tr>
            <th scope="col">نوع بیمه نامه</th>
            <th scope="col">نام بیمه گزار</th>
            <th scope="col">نام خانوادگی</th>
            <th scope="col">نوع ماشین</th>
            <th scope="col">نام خودرو</th>
            <th scope="col">مدل خودرو</th>
            <th scope="col">سال تولید خودرو</th>
            <th scope="col">شماره موتور</th>
            <th scope="col">کد VIN</th>
            <th scope="col">تاریخ شروع بیمه</th>
            <th scope="col">تاریخ انقضاء بیمه</th>
            <th scope="col">قیمت</th>
        </tr>
        </thead>
        <tbody>
        @foreach($insurances as $insurance)
            <tr>
                <td>{{ $insurance->name }}</td>
                <td>{{ $insurance->nameCreator }}</td>
                <td>{{ $insurance->familyCreator }}</td>
                <td>{{ $insurance->typeCar }}</td>
                <td>{{ $insurance->nameCar }}</td>
                <td>{{ $insurance->modelCar }}</td>
                <td>{{ $insurance->createdYear }}</td>
                <td>{{ $insurance->number }}</td>
                <td>{{ $insurance->VIN }}</td>
                <td>{{ $insurance->startInsurance }}</td>
                <td>{{ $insurance->endInsurance }}</td>
                <td>{{ $insurance->price }} تومان</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection