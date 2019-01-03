<?php
    $t = $_POST['KhuVuc'];
    $im = $_POST['DiaChi'];
    $GioiThieu = $_POST['GioiThieu'];
    $hinhanh = $_POST['hinhanh'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("update rap set KhuVuc = '$t', DiaChi = '$im', GioiThieu = '$GioiThieu', image = '$himage' where idrap = '$idrap'") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adrap.php");
     }

?>