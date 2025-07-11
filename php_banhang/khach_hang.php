<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang khách hàng</title>
    <a href="logout.php">
        <button type="submit" name="dangxuat"> Đăng xuất </button>
    </a>
    
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
        <h1 class="header">Trang khách hàng</h1>
        
        <!-- Hiển thị nội dung trang khách hàng -->
        <p>Xin chào, bạn đang đăng nhập với vai trò "khách hàng".</p>
        <!-- Các chức năng dành cho khách hàng -->
        <!-- NGUYỄN HOÀNG VIỆT -->
        <ul class="menu">
            <li><a href="xem_thong_tin_san_pham.php">Xem thông tin sản phẩm</a></li>
            <li><a href="xem_thong_tin_loai_san_pham.php">Xem thông tin loại sản phẩm</a></li>
            <li><a href="xem_thong_tin_nha_cung_cap.php">Xem thông tin nhà cung cấp</a></li>
            <li><a href="gio_hang.php">Gio Hang</a></li>
            
        </ul>
    </div>
    

    <div>
        <div class="box">
            <div class="boxsp">
                <img src="./img/lv.jpg" alt="...">
                <div>
                <form action="gio_hang.php" method="post">
                    <h3>Mũ đen </h3>
                    <div>Giá: <span>$2000</span> </div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                       
                    
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/Ju.jpg." alt="...">
                <div>
                    <form action="gio_hang.php" method="post">
                    <h3>Mũ xanh</h3>
                    <div>Giá: <span>$2200</span></div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                     
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/3.jpg" alt="">
                <div>
                    <h3>Mũ xám</h3>
                    <div>Giá: <span>$2500</span></div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                        
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/4.jpg" alt="">
                <div>
                    <h3>Mũ trắng</h3>
                    <div>Giá: <span>$3000</span></div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                       
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="box">
            <div class="boxsp">
                <img src="./img/lv.jpg" alt="">
                <div>
<h3>Mũ LV</h3>
                    <div>Giá: <span>$2000</span></div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                      
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/Ju.jpg" alt="">
                <div>
                    <h3>Mũ đen</h3>
                    <div>Giá: <span>$2200</span></div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                     
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/3.jpg" alt="">
                <div>
                    <h3>Mũ xanh</h3>
                    <div>Giá: <span>$2500</span></div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                       
                </div>
            </div>
    
            <div class="boxsp">
                <img src="./img/4.jpg" alt="">
                <div>
                    <h3>Mũ xám</h3>
                    <div>Giá: <span>$3000</span></div>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                       
                </div>
            </div>
        </div>
    </div>
</body>
</html>