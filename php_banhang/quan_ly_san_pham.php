<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" style="text/css" href="main.css">
    <title>Quản lý sản phẩm</title>
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        .menu {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
    }
        
        .menu a:hover {
            background-color: #ccc;
        }
    </style>
<body>
<table>
    <h1>Quản lý sản phẩm</h1>
    
    <!-- Hiển thị danh sách sản phẩm -->
    <h2>Danh sách sản phẩm</h2>
    <?php
        // Kết nối đến cơ sở dữ liệu
        $conn = mysqli_connect('localhost', 'root', '', 'php_banhang1');

        // Kiểm tra kết nối
        if (!$conn) {
            die('Kết nối không thành công: ' . mysqli_connect_error());
        }

        // Truy vấn dữ liệu từ bảng loai_san_pham
        $query = "SELECT * FROM ql_thongtinsanpham";
        $result = mysqli_query($conn, $query);

        // Đổ dữ liệu vào bảng
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row['Ma_id'] . "</td>";
                echo "<td>" . $row['Ma_loai_sp'] . "</td>";
                echo "<td>" . $row['Ma_nha_cung_cap'] . "</td>";
                echo "<td>" . $row['Ma_sp'] . "</td>";
                echo "<td>" . $row['Ten_sp'] . "</td>";
                echo "<td>" . $row['Ngay_nhap'] . "</td>";
                echo "<td>" . $row['Ngay_xuat'] . "</td>";
                echo "</tr>";
        }

    ?>
    
    <!-- NGUYỄN HOÀNG VIỆT -->
    <h2>Thêm sản phẩm mới</h2>
    <form method="POST" action="them_san_pham.php">
        <label for="ten_sp">Tên sản phẩm:</label>
        <input type="text" name="ten_sp" id="ten_sp">
        <input type="submit" value="Thêm">
    </form>
    </table>
</body>
</html>