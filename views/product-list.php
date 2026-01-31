<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
<a href="?page=product-add" class="btn btn-primary mb-2">Thêm</a>
<table class="table table-bordered">
<tr><th>ID</th><th>Tên</th><th>Giá</th><th>Hành động</th></tr>
<?php foreach ($products as $p): ?>
<tr>
<td><?= $p['id'] ?></td>
<td><?= $p['ten'] ?></td>
<td><?= number_format($p['gia']) ?></td>
<td>
<a href="?page=product-detail&id=<?= $p['id'] ?>">Xem</a> |
<a href="?page=product-edit&id=<?= $p['id'] ?>">Sửa</a> |
<a onclick="return confirm('Xóa?')"
   href="?page=product-delete&id=<?= $p['id'] ?>">Xóa</a>
</td>
</tr>
<?php endforeach ?>
</table>
</div>
