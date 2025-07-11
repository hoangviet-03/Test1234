<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhà cung cấp</title>
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
    <h1>Thông tin nhà cung cấp</h1>
    
    <table>
        <tr>
            <th>Mã ID</th>
            <th>Tên nhà cung cấp</th>
        </tr>
        
        <?php
        // Kết nối đến cơ sở dữ liệu
        $conn = mysqli_connect('localhost', 'root', '', 'web_mu');

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
        $conn->close();
        ?>
        <!-- NGUYỄN HOÀNG VIỆT -->
    </table>
</body>
</html>