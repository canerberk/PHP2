@extends('layout.main')
@section('content')

    <form action="{{BASE_URL}}create-customer" method="POST" enctype="multipart/form-data" class="m-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name">
            <label for="floatingInput">Tên khách hàng</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email">
            <label for="floatingInput">Email khách hàng</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="phone" name="phone">
            <label for="floatingInput">Số điện thoại khách hàng</label>
        </div>

        <br>
        <input class="btn btn-outline-success " type="submit" name="add" value="THÊM">

        <a href="{{BASE_URL}}home-customer"><button type="button" class="btn btn-secondary">Danh sách</button></a>
    </form>


@endsection