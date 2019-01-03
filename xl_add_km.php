<?php
    $t = $_POST['TenKM'];
    $im = $_POST['Image'];
    $c = $_POST['ChitietKM'];
    $h = $_POST['hinhanh'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("insert into khuyenmai(TenKM, Image, ChitietKM, hinhanh)
    values('$t','$im','$c','$h')") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adphim.php");
     }

?>
