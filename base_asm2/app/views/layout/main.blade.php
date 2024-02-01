<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @include('layout.style')
    <title>Trang chủ Admin</title>
</head>
<body class="container text-center">

<ul class="nav justify-content-center">
    <li><a href="{{ BASE_URL }}">Trang chủ</a></li>
    <li><a href="{{ BASE_URL . 'home-category'}}">Danh mục</a></li>
    <li><a href="{{ BASE_URL . 'home-product'}}">Sản phẩm</a></li>
    <li><a href="{{ BASE_URL . 'home-customer'}}">Khách hàng</a></li>
</ul>
    <section class="content">
        @yield('content')
    </section>
</body>
</html>



