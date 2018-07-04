
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
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/iranSans.css">

    <style>

        .page-break {
            page-break-after: always;
        }
        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        table {
            border-collapse: collapse;
        }
        *, :after, :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        user agent stylesheet
        table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
        }
        td {
            padding:5px;
        }
        body{
            font-family: IRANSans !important;
        }
    </style>
    <script>
        window.print();
    </script>
</head>

<body>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <br>
            @yield('content')
        </main>
</body>
</html>
