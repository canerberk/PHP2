@extends('layout.main')
@section('content')

    <form action="{{BASE_URL}}create-category" method="POST" enctype="multipart/form-data" class="m-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name">
            <label for="floatingInput">Tên danh mục</label>
        </div>

        <br>
        <input class="btn btn-outline-success " type="submit" name="add" value="THÊM">

        <a href="{{BASE_URL}}home-category"><button type="button" class="btn btn-secondary">Danh sách</button></a>
    </form>


@endsection