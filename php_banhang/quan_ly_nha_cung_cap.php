<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhà cung cấp</title>
</head>
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
<body>
<table>
    <h1>Quản lý nhà cung cấp</h1>

    <!-- NGUYỄN HOÀNG VIỆT -->
    <h2>Danh sách nhà cung cấp</h2>
    <?php
        // Kết nối đến cơ sở dữ liệu
        $conn = mysqli_connect('localhost', 'root', '', 'php_banhang1');

        // Kiểm tra kết nối
        if (!$conn) {
            die('Kết nối không thành công: ' . mysqli_connect_error());
        }

        // Truy vấn dữ liệu từ bảng loai_san_pham
        $query = "SELECT * FROM ql_thongtinnhacungcap";
        $result = mysqli_query($conn, $query);

        // Đổ dữ liệu vào bảng
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Ma_id'] . "</td>";
            echo "<td>" . $row['Ten_nha_cung_cap'] . "</td>";
            echo "</tr>";
        }

        // Đóng kết nối
        mysqli_close($conn); 
        ?> 
    
    <!-- Form để thêm nhà cung cấp mới -->
    <h2>Thêm nhà cung cấp mới</h2>
    <form method="POST" action="them_nha_cung_cap.php">
        <label for="ten_nha_cc">Tên nhà cung cấp:</label>
        <input type="text" name="ten_nha_cc" id="ten_nha_cc">
        <input type="submit" value="Thêm">
    </form>
    </table>
</body>
</html>