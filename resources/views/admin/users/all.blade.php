@extends('admin.master')

@section('content')
    <br>
    <h2 align="center">کاربران</h2>
    <hr>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col"></th>
            <th scope="col">نام</th>
            <th scope="col">نام خانوادگی</th>
            <th scope="col">شماره تلفن</th>
            <th scope="col">آدرس ایمیل</th>
            <th scope="col">مقام</th>
            <th scope="col">بیمه</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">1</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->family }}</td>
                <td>{{ $user->phonenumber }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->render() }}
@endsection