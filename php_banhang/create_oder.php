<!DOCTYPE html>
<html>
<head>
    <title>Đặt hàng</title>
</head>
<body>
    <h1>Đặt hàng</h1>
    <?php
    // Bắt đầu phiên làm việc
    session_start();
    //nguyễn hoàng việt
    // Kiểm tra giỏ hàng
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        // Kết nối tới database (Bạn cần cập nhật lại thông tin kết nối)
        $conn = mysqli_connect("localhost", "root", "", "php_banhang1");
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        // Truy vấn cơ sở dữ liệu để tạo đơn hàng từ giỏ hàng
        // Ví dụ:
        $total_price = 0;
        foreach ($_SESSION['cart'] as $product) {
            // Tính tổng giá tiền của đơn hàng
            $total_price += $product['Gia'];

            // Lưu thông tin đơn hàng vào bảng "don_hang" (giả sử đã có bảng "don_hang" với các trường tương ứng)
            // Ví dụ:
            $ma_sp = $product['Ma_sp'];
            $ten_sp = $product['Ten_sp'];
            $gia = $product['Gia'];

            // Thực hiện truy vấn để lưu thông tin đơn hàng
            $query = "INSERT INTO don_hang (Ma_sp, Ten_sp, Gia) VALUES ('$Ma_sp', '$Ten_sp', $Gia)";
            $conn->query($query);
        }

        // Sau khi lưu thông tin vào cơ sở dữ liệu, bạn có thể xóa giỏ hàng
        unset($_SESSION['cart']);

        // Đóng kết nối
        $conn->close();

        // Hiển thị thông báo đặt hàng thành công
        echo "Đặt hàng thành công! Tổng giá tiền đơn hàng: " . $total_price . " đ";
    } else {
        // Nếu giỏ hàng trống, thông báo lỗi
        echo "Lỗi: Giỏ hàng trống.";
    }
    ?>
    <br>
    <a href="gio_hang.php">Tiếp tục mua hàng</a>
</body>
</html>
