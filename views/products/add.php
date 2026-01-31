<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">➕ Thêm sản phẩm mới</h5>
                </div>

                <div class="card-body">
                    <form method="POST"
                          action="index.php?page=product-store"
                          enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Nhập tên sản phẩm"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Giá sản phẩm</label>
                            <input type="number"
                                   name="price"
                                   class="form-control"
                                   placeholder="Nhập giá"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mô tả</label>
                            <textarea name="description"
                                      class="form-control"
                                      rows="3"
                                      placeholder="Mô tả sản phẩm"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hình ảnh</label>
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
                                    class="btn btn-success">
                                💾 Lưu sản phẩm
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
