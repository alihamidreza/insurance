@extends('admin.master')

@section('content')
    <br>
        <div class="btn btn-group">
            <a href="/panel/pdf" class="btn btn-sm btn-secondary"><i class="fa fa-download"></i>  PDF دانلود </a>
            <a href="/panel/all" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a>
        </div>
    <hr>
    <div class="page-break">
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th scope="col">نام</th>
                <th scope="col">نام خانوادگی</th>
                <th scope="col">شماره تلفن</th>
                <th scope="col">آدرس ایمیل</th>
                <th scope="col">شماره شناسنامه</th>
                <th scope="col">بیمه نامه کاربر</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->family }}</td>
                    <td>{{ $user->phonenumber }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->shenasname }}</td>
                    <td>
                        @if(count($user->insurances) == 0)
                            ندارد
                        @endif
                        @foreach($user->insurances as $insurance)
                            {{ $insurance->name }}@if(!$loop->last){{" , "}}@endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->render() }}
@endsection