<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h5 class="mb-0">✏️ Cập nhật sản phẩm</h5>
                </div>

                <div class="card-body">
                    <form method="POST"
                          action="index.php?page=product-update"
                          enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $product['id'] ?>">
                        <input type="hidden" name="old_image" value="<?= $product['image'] ?>">

                        <div class="mb-3">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="<?= htmlspecialchars($product['name']) ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Giá</label>
                            <input type="number"
                                   name="price"
                                   class="form-control"
                                   value="<?= $product['price'] ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mô tả</label>
                            <textarea name="description"
                                      class="form-control"
                                      rows="3"><?= htmlspecialchars($product['description']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hình ảnh hiện tại</label><br>
                            <?php if (!empty($product['image'])): ?>
                                <img src="uploads/<?= $product['image'] ?>"
                                     width="120"
                                     class="img-thumbnail mb-2">
                            <?php else: ?>
                                <p class="text-muted">Chưa có ảnh</p>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Đổi ảnh mới (nếu có)</label>
                            <input type="file"
                                   name="image"
                                   class="form-control"
                                   accept="image/*">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="index.php?page=product-list"
                               class="btn btn-secondary">
                                ⬅ Quay lại
                            </a>

                            <button type="submit"
                                    class="btn btn-warning">
                                💾 Cập nhật
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
