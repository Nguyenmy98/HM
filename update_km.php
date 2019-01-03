<?php
    $IdKM = $_GET['IdKM'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("select * from khuyenmai where IdKM = '$IdKM'") or die(" lỗi truy vấn ");
    $rs = mysql_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật phim </h1>
<form action = "xl_update_km.php" method =" post">
<input type = "hidden" name = "IdKM" value="<?php echo $IdKM;?>"><br>
Tên Khuyến Mại:<input type="text" name="TenKM" value="<?php echo $rs['TenKM'];?>"><br>
Hình Ảnh:<input type="text" name="Image" value="<?php echo $rs['Image'];?>"><br>
Chi Tiết Khuyến Mại:<input type="text" name="ChitietKM" value="<?php echo $rs['ChitietKM'];?>"><br>
Image:<input type="text" name="hinhanh" value="<?php echo $rs['hinhanh'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>