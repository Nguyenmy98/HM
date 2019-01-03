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
$qr = mysql_query("select * from phim") or die (" lỗi truy vấn ");
?>
<h1> Danh sách Phim</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Tên Phim</th>
              <th>Hình Ảnh</th>
              <th>Video</th>
              <th>Danh mục</th>
              <th>Chi Tiết</th>
              <th>Tóm Tắt</th>
              <th>Action</th>
        </tr>
        <?php 
        $i = 1;
            while( $rs = mysql_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["tenphim"]."</td>";
                echo "<td>".$rs["image"]."</td>";
                echo "<td>".$rs["video"]."</td>";
                echo "<td>".$rs["id_dm"]."</td>";
                echo "<td>".$rs["ChiTiet"]."</td>";
                echo "<td>".$rs["TomTat"]."</td>";

                echo "<td><a href = 'add_phim.php'> Thêm</a> | <a href = 'update_phim.php?id=".$rs['id']."'> Sửa</a>  |
                 <a href = 'delete_phim.php?id=".$rs['id']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
  include("./includes/footer.php");
?>