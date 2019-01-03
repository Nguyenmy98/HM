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
    $qr = mysql_query("update phim set tenphim = '$t', image = '$im', video = '$v', id_dm = '$id_dm', ChiTiet = '$c', TomTat= '$tt' where id = '$id'") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/adphim.php");
     }

?>