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
$qr = mysql_query("select * from users") or die (" lỗi truy vấn ");
?>
<h1> Danh sách người dùng</h1>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Tên đăng nhập</th>
              <th>Mật Khẩu</th>
              <th>Họ Tên</th>
              <th>Địa chỉ email</th>
              <th>Ngày Sinh</th>
              <th>Action</th>
        </tr>
        <?php
        $i = 1;
            while( $rs = mysql_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["username"]."</td>";
                echo "<td>***********</td>";
                echo "<td>".$rs["name"]."</td>";
                echo "<td>".$rs["email"]."</td>";
                echo "<td>".$rs["ngaysinh"]."</td>";

                echo "<td><a href = 'add_users.php'> Thêm</a> | <a href = 'update_users.php?id=".$rs['id']."'> Sửa</a>  |
                 <a href = 'delete_users.php?id=".$rs['id']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table >
    <br>
    <?php
  include("./includes/footer.php");
?>