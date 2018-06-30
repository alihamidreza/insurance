@extends('admin.pdf')

@section('content')
    <div class="page-break">
        <table class="table table-bordered">
            <thead class="thead-light" style="background-color: #cccccc">
            <tr>
                <th scope="col">نام</th>
                <th scope="col">نام خانوادگی</th>
                <th scope="col">شماره تلفن</th>
                <th scope="col">آدرس ایمیل</th>
                <th scope="col">شماره شناسنامه</th>
                <th scope="col">شماره بیمه نامه ها</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->family }}</td>
                    <td>{{ $user->phonenumber }}</td>
                    <td>{{ $user->shenasname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach($user->insurances as $insurance)
                            {{ $insurance->number }}@if(!$loop->last){{" , "}}@endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection