<?php
    $k = $_POST['name'];
    $d = $_POST['message'];
    $t = $_POST['time'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("insert into comment(name, message, time )
    values('$k','$d','$t')") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adcmt.php");
     }

?>