<?php
session_start();
include("./includes/header.php");
?>
<html>
<head>
    <title>Trang đăng nhập</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    //Gọi file connection.php ở bài trước
    require_once("lib/connection.php");
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["btn_submit"])) {
        // lấy thông tin người dùng
        $username = $_POST["username"];
        $password = $_POST["pass"];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="") {           
            echo "<div class='alert alert-info'>
            <strong>username hoặc password bạn không được để trống!</strong>
            </div>";
        }else{
            $sql = "select * from users where username = '$username' and password = '$password' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {               
                echo "<div class='alert alert-info'>
                <strong>Tên đăng nhập hoặc mật khẩu không đúng !</strong>
                </div>";
            }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: giaodien2.php');

            

                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['id'] = '8';
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: giaodienadmin.php');
                
            }
        }
    }
?>

<div id="anhtieude">
        <img src="./img/anhtieude.jpg" alt="" class="img-tieude">
</div>
<br>

<div class="row" style="background-color: #F5ECCE">
    <div class="col-md-3"></div>
    <form action="login.php" method="post" class="col-md-6" style="border:4px double #0080FF">
        <div style="background-color: #0080FF;font-size: 25px" >
            <center><p ><b>Mời Bạn Đăng Nhập</b></p></center>
        </div>
        <div class="form-group">
            <label><b> Username</b></label>
            <input type="text" id="username" name="username">
        </div>
        <div class="form-group">
            <label><b> Password </b> </label>
            <input type="password" id="pass" name="pass">
        </div>
        <div class="form-group">
           <input name="btn_submit" type="submit" value="Đăng nhập">
                
        </div>
        <br>
        <a href="register.php" style="color: blue">Đăng Ký Thành Viên</a>
    </form>
    </div>
</body>
<?php include("./includes/footer.php"); 
?>

