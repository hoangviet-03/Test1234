<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" style="text/css" href="main.css">
    <title>Quản lý loại sản phẩm</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        li {
            margin: 0 10px;
        }

        a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
    }

        a:hover {
            background-color: #0056b3;
        }
        
    </style>

<body>
<table>
    <h1>Quản lý loại sản phẩm</h1>
    
    <!-- NGUYỄN HOÀNG VIỆT -->
    <h2>Danh sách loại sản phẩm</h2>
    <h2>Thêm loại sản phẩm mới</h2>
    
    <form method="POST" action="them_loai_san_pham.php">
        <label for="ten_loai_sp">Tên loại sản phẩm:</label>
        <input type="text" name="ten_loai_sp" id="ten_loai_sp">
        <input type="submit" value="Thêm">
       
    </form>
    <tr>
                    <th>Mã ID</th>
                    <th>Tên Loại Sản Phẩm</th>
                    <th>Mã Nhà Cung Cấp</th>
                    
                </tr>
                <?php
        // Kết nối đến cơ sở dữ liệu
        $conn = mysqli_connect('localhost', 'root', '', 'php_banhang1');

        // Kiểm tra kết nối
        if (!$conn) {
            die('Kết nối không thành công: ' . mysqli_connect_error());
        }

        // Truy vấn dữ liệu từ bảng loai_san_pham
        $query = "SELECT * FROM ql_sanpham";
        $result = mysqli_query($conn, $query);

        // Đổ dữ liệu vào bảng
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Ma_id'] . "</td>";
            echo "<td>" . $row['Ten_loai_sp'] . "</td>";
            echo "<td>" . $row['Ma_nha_cung_cap'] . "</td>";
            echo "</tr>";
        }


    // Đóng kết nối
    mysqli_close($conn); 
    ?>
    
    <!-- Form để thêm loại sản phẩm mới -->
</table>
</body>
</html>