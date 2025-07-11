<!DOCTYPE html>
<html>
<head>
    <title>Giỏ hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <h1>Giỏ hàng</h1>
    <table>
        <tr>
            <th>Mã SP</th>
            <th>Tên SP</th>
            <th>Giá</th>
        </tr>
        <?php
        // Bắt đầu phiên làm việc
        session_start();

        // Kiểm tra giỏ hàng
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            // Lấy thông tin sản phẩm từ giỏ hàng
           if(isset( $Ma_sp) || isset( $Ten_sp) || isset( $Gia)) {
            foreach ($_SESSION['cart'] as $product) {
                echo "<tr>";
                echo "<td>" . $product['Ma_sp'] . "</td>";
                echo "<td>" . $product['Ten_sp'] . "</td>";
                echo "<td>" . $product['Gia'] . " đ</td>";
                echo "</tr>";
            }
           }
            echo "<tr><td colspan='3'><a href='create_oder.php'>Đặt hàng</a></td></tr>";
        } else {
            echo "<tr><td colspan='3'>Giỏ hàng trống</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="gio_hang.php">Tiếp tục mua hàng</a>
</body>
</html>
