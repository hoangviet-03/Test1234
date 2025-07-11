<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" style="text/css" href="main.css">
</head>
<style>
       form {

box-sizing: border-box;

width: 260px;

margin: 100px auto 0;

box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);

padding-bottom: 40px;

border-radius: 3px;

}

form h1 {

box-sizing: border-box;

padding: 20px;

}



input {

margin: 40px 25px;

width: 200px;

display: block;

border: none;

padding: 10px 0;

border-bottom: solid 1px #1abc9c;

transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);

background-position: -200px 0;

background-size: 200px 100%;

background-repeat: no-repeat;

color: #0e6252;

}

input:focus, input:valid {

box-shadow: none;

outline: none;

background-position: 0 0;

}

input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {

color: #1abc9c;

font-size: 11px;

transform: translateY(-20px);

visibility: visible !important;

}

}

button {

border: none;

background: #1abc9c;

cursor: pointer;

border-radius: 3px;

padding: 6px;

width: 200px;

color: white;

margin-left: 25px;

box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);

}

button:hover {

transform: translateY(-3px);

box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);

}
    </style>
<body>
    <h1> ĐĂNG NHẬP </h1>
<?php
        // Kiểm tra nếu người dùng đã gửi thông tin đăng nhập
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $login = $_POST["login"];
            $password = $_POST["password"];
            
            // Kiểm tra thông tin đăng nhập
            if ($login == "viet" && $password == "2003") {
                // Chuyển hướng đến trang quản lý
                header("Location: quan_ly.php");
                exit();
            } elseif ($login == "khachhang" && $password == "khachhang") {
                // Chuyển hướng đến trang khách hàng
                header("Location: khach_hang.php");
                exit();
            } else {
                echo "ten dang nhap hoac tk khong dung";
            }
        }
    ?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login">
        <br>
        <label for="password">password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Đăng nhập">
    </form>
    
    <!-- nhom 11 nguyễn hoàng việt -->
    </form>

</body>

</html>