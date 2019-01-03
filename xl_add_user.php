<?php
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ngaysinh = $_POST['ngaysinh'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("insert into users(username, password, name, email, ngaysinh)
    values('$username','$password','$name','$email','$ngaysinh')") or die(" lỗi truy vấn ");
    if($qr){
        header("location:../source/giaodien4.php");
     }

?>
