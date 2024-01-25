<?php
if (is_array($pro)) {
    extract($pro);
}

$imgz = "App/Uploads/" . $img;

if (is_file($imgz)) {
    $imgx = "<img src=" . $imgz . " class='w-25 rounded'>";
} else {
    $imgx = "No photo";
}

include "App/Views/Include/header.php";

?>

<form action="index.php?url=upd-product" method="POST" enctype="multipart/form-data" class="m-3">
    <select class="form-select mb-3" aria-label="Default select example" name="idcgr">
        <?php
        foreach ($categories as $key => $value) {
            if ($idcgr == $value['id']) {
                echo '<option value="' . $value['id'] . '" selected>' . $value['name'] . '</option>';
            } else {
                echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
            }
        }
        ?>
    </select>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name" value="<?= $name ?>">
        <label for="floatingInput">Tên sản phẩm</label>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile">Ảnh</label>
        <input type="file" class="form-control m-1" id="inputGroupFile" name="img">
        <?php echo $imgx ?>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="price" name="price" value="<?= $price ?>">
        <label for="floatingInput">Giá sản phẩm</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="description" id="floatingTextarea" name="des"><?= $des ?></textarea>
        <label for="floatingTextarea">Mô tả sản phẩm </label>
    </div>

    <?php
    if (isset($thongbao) && ($thongbao != "")) { ?>
        <p class="text-center text-success"> <?= $thongbao ?></p>
    <?php } ?>

    <br>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input class="btn btn-outline-success " type="submit" name="update" value="Cập nhật">

    <a href="index.php?url=list-product"><button type="button" class="btn btn-secondary">Danh sách</button></a>
</form>

<?php
include "App/Views/Include/footer.php";
?>
