@extends('admin.master')

@section('content')
    <br>
    <h2 align="center">کاربران</h2>
    <hr>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">نام</th>
            <th scope="col">نام خانوادگی</th>
            <th scope="col">شماره تلفن</th>
            <th scope="col">آدرس ایمیل</th>
            <th scope="col">شماره شناسنامه</th>
            <th scope="col">مقام</th>
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
                <td>{{ $user->level }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->render() }}
@endsection