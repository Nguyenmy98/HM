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
$qr = mysql_query("select * from khuyenmai") or die (" lỗi truy vấn ");
?>
<h1> Danh sách Khuyến Mại</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Tên Khuyến Mại</th>
              <th>Hình Ảnh</th>
              <th>Chi Tiết Khuyến Mại</th>
              <th>Image</th> 
        <?php 
        $i = 1;
            while( $rs = mysql_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["TenKM"]."</td>";
                echo "<td>".$rs["Image"]."</td>";
                echo "<td>".$rs["ChitietKM"]."</td>";
                echo "<td>".$rs["hinhanh"]."</td>";
            
                echo "<td><a href = 'add_km.php'> Thêm</a> | <a href = 'update_km.php?IdKM=".$rs['IdKM']."'> Sửa</a>  |
                 <a href = 'delete_km.php?IdKM=".$rs['IdKM']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
  include("./includes/footer.php");
?>