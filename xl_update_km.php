<?php
    $t = $_POST['TenKM'];
    $im = $_POST['Image'];
    $ChitietKM = $_POST['ChitietKM'];
    $hinhanh = $_POST['hinhanh'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("update phim set TenKM = '$t', Image = '$im', ChitietKM = '$ChitietKM', hinhanh = '$hinhanh' where IdKM = '$IdKM'") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adkhuyenmai.php");
     }

?>