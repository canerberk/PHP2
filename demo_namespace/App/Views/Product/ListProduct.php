<?php
include "App/Views/Include/header.php";
?>

    <table class="table table-bordered m-3">
        <thead>
            <th>ID</th>
            <th>Tên</th>
            <th class="w-50">Ảnh</th>
            <th>Giá</th>
            <th>Mô tả</th>

            <th></th>
            <th></th>
        </thead>

            <?php foreach($products as $pros) {
                extract ($pros);
                $editpr = "index.php?url=edit-product&id=" . $id;
                $delpr = "index.php?url=del-product&id=" . $id;

                $imgz = "App/Uploads/" . $img;

                if (is_file($imgz)) {
                    $imgx = "<img src=" . $imgz . " class='w-25 rounded'>";
                } else {
                    $imgx = "No photo";
                }
                ?>
                <tbody>
                    <td><?= $pros['id'] ?></td>
                    <td><?= $pros['name'] ?></td>
                    <td><?= $imgx ?></td>
                    <td><?= number_format($price) ?> đ</td>
                    <td><?= $pros['des'] ?></td>

                    <td><a href="<?= $editpr; ?>"><button type="button" class="btn btn-secondary">Sửa</button></a></td>
                    <td><a href="<?= $delpr; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button></a></td>
                </tbody>
            <?php } ?>
        <tr>

        </tr>
    </table>

    <a href="index.php?url=add-product"><button type="button" class="btn btn-primary">Thêm sản phẩm</button></a>

<?php
include "App/Views/Include/footer.php";
?>
