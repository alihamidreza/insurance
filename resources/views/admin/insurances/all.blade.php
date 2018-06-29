@extends('admin.master')

@section('content')
    <br>
    <h2 align="center">بیمه نامه ها</h2>
    <a href="/insuraces/create" class="btn btn-primary btn-sm">اضافه کردن بیمه نامه</a>
    <hr>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col"></th>
            <th scope="col">نوع بیمه نامه</th>
            <th scope="col">شماره بیمه نامه</th>
        </tr>
        </thead>
        <tbody>
        @foreach($insurances as $insurance)
            <tr>
                <th scope="row">1</th>
                <td>{{ $insurance->name }}</td>
                <td>{{ $insurance->number }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $insurances->render() }}
@endsection