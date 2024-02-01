@extends('layout.main')
@section('content')

    <form action="{{BASE_URL}}update-category" method="POST" enctype="multipart/form-data" class="m-3">

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name" value="{{ $cgr['name'] }}">
            <label for="floatingInput">Tên danh mục</label>
        </div>

        <br>
        <input type="hidden" name="id" value="{{ $cgr['id'] }}">
        <input class="btn btn-outline-success " type="submit" name="update" value="Cập nhật">

        <a href="{{BASE_URL}}home-category"><button type="button" class="btn btn-secondary">Danh sách</button></a>
    </form>

@endsection
