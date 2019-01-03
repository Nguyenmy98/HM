<?php
    $Idgv = $_GET['Idgv'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("delete from giave where Idgv = '$Idgv'")
    or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adgiave.php");
     }

?> 