<?php
    include("./includes/header.php");
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Quản lý thành viên</title>
 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
  </head>
 
  <body>
    <div class="container">
      <div class="row">
        <h3> I. Quản lý thành viên</h3>
        <table class="table">
          <caption>Danh sách thành viên đã đăng ký</caption>
          <thead>
            <tr>
              <th>Id</th>
              <th>Tên đăng nhập</th>
              <th>Mật Khẩu</th>
              <th>Họ Tên</th>
              <th>Địa chỉ email</th>
              <th>Ngày Sinh</td>
              <th>Hành Động</td>
              <td>Action</td>
            </tr>  
            <?php
            mysql_select_db("project",$conn);
            $sql="select * from users order by id DESC";
            $query=mysql_query($sql);
            if(mysql_num_rows($query) == "")
            {
            echo "<tr><td colspan='5' align='center'>Chua co username nao</td></tr>";
            }
            ?>
            <td><a href="chinh-sua-thanh-vien.php?id=">Sửa</a> <a href="xoa-thanh-vien.php?id=">Xóa</a></td>

          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
       <div> 
       <button type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</button> 
      </div>   
    </div><!-- /.container -->
 
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  
 
</body></html>
<?php
  include("./includes/footer.php");
?>
