
<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <link rel="icon" href="../../../../favicon.ico">

    <title>پنل مدیریت</title>
    <link rel="stylesheet" href="/admin/css/panel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/iranSans.css">
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>

@include('Admin.section.header')

<div class="container-fluid">
    <div class="row">

        @include('Admin.section.navbar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<br>
            @yield('content')
        </main>
    </div>
</div>
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/panel.js"></script>
<script>
    $(document).ready(function () {
        $('#dropdownMenuLink').click(function () {
            $('.menudrop').toggleClass('d-block');
        });
    });
</script>
@yield('scripts')
</body>
</html>
