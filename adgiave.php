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
$qr = mysql_query("select * from giave") or die (" lỗi truy vấn ");
?>
<h1> Giá Vé</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Độ Tuổi</th>
              <th>Giá</th>
              <th>Action</th>
        </tr>
        <?php 
        $i = 1;
            while( $rs = mysql_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["DoTuoi"]."</td>";
                echo "<td>".$rs["Gia"]."</td>";
              
                echo "<td><a href = 'add_gv.php'> Thêm</a> | <a href = 'update_gv.php?Idgv=".$rs['Idgv']."'> Sửa</a>  |
                 <a href = 'delete_gv.php?Idgv=".$rs['Idgv']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
  include("./includes/footer.php");
?>