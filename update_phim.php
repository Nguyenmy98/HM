<?php
    $id = $_GET['id'];
   // kết nối đến server
    $conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
    // lựa chọn cơ sở dữ liệu
    mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
    //truy vấn dữ liệu
    $qr = mysql_query("select * from phim where id = '$id'") or die(" lỗi truy vấn ");
    $rs = mysql_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật phim </h1>
<form action = "xl_update_phim.php" method =" post">
<input type = "hidden" name = "id" value="<?php echo $id;?>"><br>
Tên Phim:<input type="text" name="tenphim" value="<?php echo $rs['tenphim'];?>"><br>
Hình Ảnh:<input type="text" name="image" value="<?php echo $rs['image'];?>"><br>
Video:<input type="text" name="video" value="<?php echo $rs['video'];?>"><br>
Danh mục:<input type="text" name="id_dm" value="<?php echo $rs['id_dm'];?>"><br>
Chi Tiết:<input type="text" name="ChiTiet" value="<?php echo $rs['ChiTiet'];?>"><br>
Tóm Tắt:<input type="text" name="TomTat" value="<?php echo $rs['TomTat'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>