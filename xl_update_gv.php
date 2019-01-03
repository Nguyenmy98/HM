<?php
    $t = $_POST['DoTuoi'];
    $im = $_POST['Gia'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("update giave set DoTuoi = '$t', Gia = '$im'") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adgiave.php");
     }

?>