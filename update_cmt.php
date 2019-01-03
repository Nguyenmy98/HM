<?php
    $cm_id = $_GET['cm_id'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("select * from comment where cm_id = '$cm_id'") or die(" lỗi truy vấn ");
    $rs = mysql_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật Rạp </h1>
<form action = "xl_update_cmt.php" method =" post">
<input type = "hidden" name = "cm_id" value="<?php echo $cm_id;?>"><br>
Tên Người Dùng:<input type="text" name="name" value="<?php echo $rs['name'];?>"><br>
Bình Luận:<input type="text" name="message" value="<?php echo $rs['message'];?>"><br>
Thời Gian:<input type="text" name="time" value="<?php echo $rs['time'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>