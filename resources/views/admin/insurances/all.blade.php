@extends('admin.master')

@section('content')
    <br>
    <h2 align="center">بیمه نامه ها</h2>
    <a href="{{ route('insurances.create') }}" class="btn btn-primary btn-sm">اضافه کردن بیمه نامه</a>
    <hr>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">نوع بیمه نامه</th>
            <th scope="col">شماره بیمه نامه</th>
            <th scope="col">تنظیمات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($insurances as $insurance)
            <tr>
                <td>{{ $insurance->name }}</td>
                <td>{{ $insurance->number }}</td>
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