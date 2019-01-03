<?php
    $idrap = $_GET['idrap'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("select * from rap where idrap = '$idrap'") or die(" lỗi truy vấn ");
    $rs = mysql_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật Rạp </h1>
<form action = "xl_update_rap.php" method =" post">
<input type = "hidden" name = "idrap" value="<?php echo $idrap;?>"><br>
Khu Vực Rạp:<input type="text" name="KhuVuc" value="<?php echo $rs['KhuVuc'];?>"><br>
Địa Chỉ Rạp:<input type="text" name="DiaChi" value="<?php echo $rs['DiaChi'];?>"><br>
Giới Thiệu:<input type="text" name="GioiThieu" value="<?php echo $rs['GioiThieu'];?>"><br>
Hình Ảnh:<input type="text" name="image" value="<?php echo $rs['image'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>