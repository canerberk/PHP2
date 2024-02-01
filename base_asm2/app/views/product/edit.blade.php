@extends('layout.main')
@section('content')

<form action="{{ BASE_URL . "update-product" }}" method="POST" enctype="multipart/form-data" class="m-3">
    <select class="form-select mb-3" aria-label="Default select example" name="idcgr">
        @foreach ($categories as $key => $value) {
            @if ($pro['idcgr'] == $value['id']) {
                <option value="{{$value['id']}}" selected>{{$value['name']}}</option>
            } @else {
                <option value="{{$value['id']}}">{{$value['name']}}</option>
            }
        }
           @endif
        @endforeach
    </select>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name" value="{{$pro['name']}}">
        <label for="floatingInput">Tên sản phẩm</label>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile">Ảnh</label>
        <input type="file" class="form-control m-1" id="inputGroupFile" name="img">
        <img src="{{BASE_URL}}public/images/{{$pro['img']}}" class='w-25 rounded'>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="price" name="price" value="{{ number_format($pro['price']) }}₫">
        <label for="floatingInput">Giá sản phẩm</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="description" id="floatingTextarea" name="des">{{$pro['des']}}</textarea>
        <label for="floatingTextarea">Mô tả sản phẩm </label>
    </div>

    <br>
    <input type="hidden" name="id" value="{{$pro['id']}}">
    <input class="btn btn-outline-success " type="submit" name="update" value="Cập nhật">

    <a href="{{ BASE_URL . "home-product" }}"><button type="button" class="btn btn-secondary">Danh sách</button></a>
</form>
@endsection
