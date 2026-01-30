<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            font-size: 16px;
        }

        li:last-child {
            border-bottom: none;
        }

        .price {
            color: #e74c3c;
            font-weight: bold;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
        }

        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Danh sách sản phẩm</h1>

    <ul>
        <?php foreach ($products as $p): ?>
            <li>
                <span><?= $p['name'] ?></span>
                <span class="price">
                    <?= number_format($p['price'], 0, ',', '.') ?> VNĐ
                </span>
            </li>
        <?php endforeach; ?>
    </ul>

    <a class="back" href="index.php?page=home">← Quay về trang chủ</a>
</div>

</body>
</html>
