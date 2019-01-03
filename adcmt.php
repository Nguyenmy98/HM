<?php
    include("./includes/header.php");

?>
 <br>
<?php
// kết nối đến server
$conn = mysql_connect("localhost","root","") or die( " lỗi kết nối đến server");
// lựa chọn cơ sở dữ liệu
mysql_select_db("datvexemphim") or die (" không tồn tại CSDL datvexemphim");
//truy vấn dữ liệu
$qr = mysql_query("select * from comment") or die (" lỗi truy vấn ");
?>
<h1> Giá Vé</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Tên Người Dùng</th>
              <th>Bình Luận</th>
              <th>Thời Gian</th>
              <th>Action</th>
        </tr>
        <?php 
        $i = 1;
            while( $rs = mysql_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["name"]."</td>";
                echo "<td>".$rs["message"]."</td>";
                echo "<td>".$rs["time"]."</td>";
                echo "<td><a href = 'add_cmt.php'> Thêm</a> | <a href = 'update_cmt.php?cm_id=".$rs['cm_id']."'> Sửa</a>  |
                 <a href = 'delete_cmt.php?cm_id=".$rs['cm_id']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
  include("./includes/footer.php");
?>