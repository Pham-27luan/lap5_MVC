<div class="container mt-4">
<form method="POST" action="?page=product-update&id=<?= $product['id'] ?>">
<input name="ten" class="form-control mb-2" value="<?= $product['ten'] ?>">
<input name="gia" class="form-control mb-2" value="<?= $product['gia'] ?>">
<button class="btn btn-warning">Cập nhật</button>
</form>
</div>
