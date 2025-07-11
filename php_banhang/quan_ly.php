<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Trang quản lý</title>
    
    <a href="logout.php">
        <button type="submit" name="dangxuat"> Đăng xuất </button>
    </a>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            background-color: #f2f2f3
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

        .box {
            
            width: 100%;
            display: flex;
        }
        
        .boxsp {
            width: 25%;
            margin-top: 50px;
            margin-left: 30px;
        }
        
        .boxsp img {
            height:200px;
            background-repeat: no-repeat;
            background-size: cover;
            width: 300px;
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

        
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">Trang quản lý</h1>
        
        <!-- Hiển thị nội dung trang quản lý -->
        <p>Xin chào, bạn đang đăng nhập với vai trò "admin".</p>
        <!-- Các chức năng quản lý -->
        <!-- Nguyễn hoàng việt -->
        <ul>
            <li><a href="quan_ly_loai_san_pham.php">Quản lý loại sản phẩm</a></li>
            <li><a href="quan_ly_san_pham.php">Quản lý sản phẩm</a></li>
            <li><a href="quan_ly_nha_cung_cap.php">Quản lý nhà cung cấp</a></li>
            <li><a href="gio_hang.php">Gio Hang</a></li>
            
        </ul>
    </div>
    <div>
        <div class="box">
            <div class="boxsp">
                <img src="./img/lv.jpg" alt="">
                <div>
                    <h3>Mũ đen</h3>
                    <div>Giá: <span>$2000</span></div>
                    <div> MUA </div>
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/Ju.jpg" alt="">
                <div>
                    <h3>Mũ xanh</h3>
                    <div>Giá: <span>$2200</span></div>
                    <div> MUA </div>
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/3.jpg" alt="">
                <div>
                    <h3>Mũ xám</h3>
                    <div>Giá: <span>$2500</span></div>
                    <div> MUA </div>
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/4.jpg" alt="">
                <div>
                    <h3>Mũ trắng</h3>
                    <div>Giá: <span>$3000</span></div>
                    <div> MUA </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="box">
            <div class="boxsp">
                <img src="./img/lv.jpg" alt="">
                <div>
<h3>Mũ đen</h3>
                    <div>Giá: <span>$2000</span></div>
                    <div> MUA </div>
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/Ju.jpg" alt="">
                <div>
                    <h3>Mũ xanh</h3>
                    <div>Giá: <span>$2200</span></div>
                    <div> MUA </div>
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/3.jpg" alt="">
                <div>
                    <h3>Mũ 3</h3>
                    <div>Giá: <span>$2500</span></div>
                    <div> MUA </div>
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/4.jpg" alt="">
                <div>
                    <h3>Mũ hồng</h3>
                    <div>Giá: <span>$3000</span></div>
                    <div> MUA </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>