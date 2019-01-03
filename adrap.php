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
$qr = mysql_query("select * from rap") or die (" lỗi truy vấn ");
?>
<h1> Danh sách Rạp</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Khu Vực Rạp</th>
              <th>Địa Chỉ Rạp</th>
              <th>Giới Thiệu</th>
              <th>Hình Ảnh</th>
              <th>Action</th>
        </tr>
        <?php 
        $i = 1;
            while( $rs = mysql_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["KhuVuc"]."</td>";
                echo "<td>".$rs["DiaChi"]."</td>";
                echo "<td>".$rs["GioiThieu"]."</td>";
                echo "<td>".$rs["image"]."</td>";
                echo "<td><a href = 'add_rap.php'> Thêm</a> | <a href = 'update_rap.php?idrap=".$rs['idrap']."'> Sửa</a>  |
                 <a href = 'delete_rap.php?idrap=".$rs['idrap']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
  include("./includes/footer.php");
?>