<?php
    $Idgv = $_GET['Idgv'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("select * from giave where Idgv = '$Idgv'") or die(" lỗi truy vấn ");
    $rs = mysql_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật Rạp </h1>
<form action = "xl_update_gv.php" method =" post">
<input type = "hidden" name = "Idgv" value="<?php echo $Idgv;?>"><br>
Độ Tuổi:<input type="text" name="DoTuoi" value="<?php echo $rs['DoTuoi'];?>"><br>
Giá:<input type="text" name="Gia" value="<?php echo $rs['Gia'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>