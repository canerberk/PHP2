<?php
include "App/Views/Include/header.php";
?>

    <table class="table table-bordered m-3">
        <thead>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>

            <th></th>
            <th></th>
        </thead>

            <?php foreach($customers as $cuss) {
                extract ($cuss);
                $editcus = "index.php?url=edit-customer&id=" . $id;
                $delcus = "index.php?url=del-customer&id=" . $id;
                ?>
                <tbody>
                    <td><?= $cuss['id'] ?></td>
                    <td><?= $cuss['name'] ?></td>
                    <td><?= $cuss['email'] ?></td>
                    <td><?= $cuss['phone'] ?></td>

                    <td><a href="<?= $editcus; ?>"><button type="button" class="btn btn-secondary">Sửa</button></a></td>
                    <td><a href="<?= $delcus; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button></a></td>
                </tbody>
            <?php } ?>
        <tr>

        </tr>
    </table>

<a href="index.php?url=add-customer"><button type="button" class="btn btn-primary">Thêm khách hàng</button></a>

<?php
include "App/Views/Include/footer.php";
?>
