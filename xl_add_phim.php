<?php
    $t = $_POST['tenphim'];
    $im = $_POST['image'];
    $v = $_POST['video'];
    $id_dm = $_POST['id_dm'];
    $c = $_POST['ChiTiet'];
    $tt = $_POST['TomTat'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("insert into phim(tenphim, image, video, id_dm, ChiTiet, TomTat)
    values('$t','$im','$v','$id_dm','$c','$tt')") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adphim.php");
     }

?>
