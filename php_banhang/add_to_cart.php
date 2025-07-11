<?php

// Bắt đầu phiên làm việc
session_start();

// Kết nối tới database (Bạn cần cập nhật lại thông tin kết nối)
$conn = mysqli_connect("localhost", "root", "", "php_banhang1");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Truy vấn database để lấy thông tin mặt hàng dựa vào ID
    $query = "SELECT * FROM ql_thongtinsanpham WHERE id = $product_id";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Thêm mặt hàng vào giỏ hàng
        $_SESSION['cart'][] = array(
            'Ma_sp' => $row['Ma_sp'],
            'Ten_sp' => $row['Ten_sp'],
            'gia' => 100000 // Thay giá bằng giá thực tế từ cơ sở dữ liệu hoặc tính toán khác
        );

        // Chuyển hướng người dùng đến trang giỏ hàng
        header("Location: cart.php");
        exit;
    } else {
        echo "Mặt hàng không tồn tại.";
    }
}

// Đóng kết nối
$conn->close();
?>
