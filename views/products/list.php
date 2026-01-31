<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <h2 class="mb-3">📦 Danh sách sản phẩm</h2>

    <a href="index.php?page=product-add" class="btn btn-primary mb-3">
        ➕ Thêm sản phẩm
    </a>

    <form method="GET" class="row mb-3">
        <input type="hidden" name="page" value="product-list">

        <div class="col-md-4">
            <input type="text"
                name="keyword"
                class="form-control"
                placeholder="🔍 Nhập tên sản phẩm"
                value="<?= $_GET['keyword'] ?? '' ?>">
        </div>

        <div class="col-md-2">
            <button class="btn btn-primary">
                Tìm kiếm
            </button>
        </div>
    </form>


    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
        </thead>

        <tbody>
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= number_format($product['price']) ?> đ</td>

                    <td>
                        <?php if (!empty($product['image'])): ?>
                            <img src="uploads/<?= $product['image'] ?>"
                                width="80"
                                class="img-thumbnail">
                        <?php else: ?>
                            Không có ảnh
                        <?php endif; ?>
                    </td>


                    <td>
                        <a href="index.php?page=product-edit&id=<?= $product['id'] ?>"
                           class="btn btn-warning btn-sm">
                            ✏️ Sửa
                        </a>

                        <a href="index.php?page=product-delete&id=<?= $product['id'] ?>"
                           onclick="return confirm('Bạn có chắc muốn xóa?')"
                           class="btn btn-danger btn-sm">
                            🗑️ Xóa
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Không có dữ liệu</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

</div>
</body>
</html>
