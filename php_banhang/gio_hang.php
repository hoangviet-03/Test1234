<!DOCTYPE html>
<html>
<head>
    <title>Thông tin mặt hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f2f2;
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
            background-color: #ff2f2;
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
    <h1>Thông tin mặt hàng</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Mã Loại SP</th>
            <th>Mã Nhà Cung Cấp</th>
            <th>Mã SP</th>
            <th>Tên SP</th>
            <th>Ngày Nhập</th>
            <th>Ngày Xuất</th>
            <th>Thêm vào giỏ hàng</th>
        </tr>
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

        // Đóng kết nối
        mysqli_close($conn); 
        ?>
        <tr>
            <a href="gio_hang.php <?php echo $row['id']; ?>">Edit</a>
        </tr>
    </table>
</body>
</html>
