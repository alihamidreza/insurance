@extends('admin.master')

@section('content')
    <br>
    <h2 align="center">بیمه نامه ها</h2>
    <a href="{{ route('insurances.create') }}" class="btn btn-primary btn-sm">اضافه کردن بیمه نامه</a>
    <a href="/panel/downloadInsurance" target="_blank" class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Print</a>
    <hr>
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
            <th scope="col">تنظیمات</th>
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
                <td>
                    <div class="btn-group" role="group">
                        <form action="{{ route('insurances.destroy' , $insurance->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm" type="submit" style="border-top-right-radius:0;border-bottom-right-radius: 0; ">حذف</button>
                        </form>
                        <a href="{{ route('insurances.edit' , $insurance->id) }}" class="btn btn-warning btn-sm">ویرایش</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $insurances->render() }}
@endsection