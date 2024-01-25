<?php
include "App/Views/Include/header.php";
?>

<form action="index.php?url=add-product" method="POST" enctype="multipart/form-data" class="m-3">
    <select class="form-select mb-3" aria-label="Default select example" name="idcgr">
        <option selected>Danh mục sản phẩm</option>
        <?php foreach ($categories as $cgrs) { ?>
        <option value="<?= $cgrs['id'] ?>>"><?= $cgrs['name'] ?></option>
        <?php } ?>
    </select>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name">
        <label for="floatingInput">Tên sản phẩm</label>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile">Ảnh</label>
        <input type="file" class="form-control" id="inputGroupFile" name="img">
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="price" name="price">
        <label for="floatingInput">Giá sản phẩm</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="description" id="floatingTextarea" name="des"></textarea>
        <label for="floatingTextarea">Mô tả sản phẩm</label>
    </div>

    <?php
    if (isset($thongbao) && ($thongbao != "")) { ?>
        <p class="text-center text-success"> <?= $thongbao ?></p>
    <?php } ?>

    <br>
    <input class="btn btn-outline-success " type="submit" name="add" value="THÊM">

    <a href="index.php?url=list-product"><button type="button" class="btn btn-secondary">Danh sách</button></a>
</form>


<?php
include "App/Views/Include/footer.php";
?>