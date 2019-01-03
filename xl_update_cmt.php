<?php
    $n = $_POST['name'];
    $m = $_POST['message'];
    $t = $_POST['time'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("update comment set name = '$n', message = '$m', time = $t ") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adcmt.php");
     }

?>