<?php
    $k = $_POST['KhuVuc'];
    $d = $_POST['DiaChi'];
    $g = $_POST['GioiThieu'];
    $image = $_POST['image'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("insert into rap(KhuVuc, DiaChi, GioiThieu, image )
    values('$k','$d','$g','$image')") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adrap.php");
     }

?>
