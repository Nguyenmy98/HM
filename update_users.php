<?php
    $id = $_GET['id'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("select * from users where id = '$id'") or die(" lỗi truy vấn ");
    $rs = mysql_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật người dùng </h1>
<form action = "xl_update_users.php" method =" post">
<input type = "hidden" name = "id" value="<?php echo $id;?>"><br>
Tên đăng nhập :<input type = "text" name = "username" value="<?php echo $rs['username'];?>"><br>
Mật khẩu :<input type = "password" name = "password" value="<?php echo $rs['password'];?>"><br>
Họ tên :<input type = "text" name = "name" value="<?php echo $rs['name'];?>"><br>
Địa chỉ email :<input type = "text" name = "email" value="<?php echo $rs['email'];?>"><br>
Ngày sinh:<input type = "text" name = "ngaysinh" value="<?php echo $rs['ngaysinh'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>