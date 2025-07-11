<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" style="text/css" href="main.css">
    <title>Xem thông tin sản phẩm</title>
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
        
        
        
        .menu a:hover {
            background-color: #ccc;
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
<table>
    <h1>Xem thông tin loại sản phẩm</h1>
    
    <!-- NGUYỄN HOÀNG VIỆT -->
    <h2>Danh sách loại sản phẩm</h2>
    <tr>
    <th>Mã ID</th>
                    <th>Mã Loại Sản Phẩm</th>
                    <th>Mã Nhà Cung Cấp</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Ngày Nhập</th>
                    <th>Ngày Xuất</th>
                </tr>
       <?php
       // Kết nối đến cơ sở dữ liệu
       $conn = mysqli_connect('localhost', 'root', '', 'web_mu');

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

        // Đóng kết nối
        mysqli_close($conn);
    ?>
    </table>
</body>
</html>