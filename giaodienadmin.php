<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<?php
    include("./includes/header.php");
    include("./includes/menu_logout.php");
?>
<div id = "main">
   <br> <br>
   <center> <font face="Comic sans MS" size="9" >** Quản Lý Chung **</font> </center><br><br>
   <font size="6" > I.<a href = 'giaodien4.php'> Quản Lý Người Dùng</a></font><br><br>
   <font size="6" > II.<a href = 'adphim.php'> Quản Lý Phim</a></font><br><br>
   <font size="6" > III.<a href = 'adkhuyenmai.php'> Quản Lý Khuyến Mại</a></font><br><br>
   <font size="6" > IV.<a href = 'adrap.php'> Quản Lý Rạp</a></font><br><br>
   <font size="6" > V.<a href = 'adgiave.php'> Quản Lý Giá Vé</a></font><br><br>
   <font size="6" > V.<a href = 'adcmt.php'> Quản Lý Bình Luận</a></font><br><br>
    <div class="row">  
    <?php
    include("./includes/footer.php");
?>