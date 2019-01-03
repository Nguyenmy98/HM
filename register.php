<?php include("./includes/header.php"); ?>
<br>
<html>
	<head>
		<title>Form đăng ký thành viên</title>
	</head>
	<body>
		<?php
        require_once("lib/connection.php");
        
		if (isset($_GET["btn_submit"])) {
            
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_GET["username"];
  			$password = $_GET["pass"];
            $name = $_GET["name"];
            $email = $_GET["email"];
            $month = $_GET["month"];
            $day = $_GET["day"];
            $year = $_GET["year"];
            $ngaysinh= $year . '-' . $month . '-' . $day;
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == ""|| $ngaysinh == "") {
                echo "<div class='alert alert-info'>
                <strong>Vui lòng điền đầy đủ các trường.</strong>
                </div>";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
                        echo "<div class='alert alert-info'>
                        <strong>Tài Khoản đã tồn tại.</strong>
                        </div>";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
	    					username,
	    					password,
	    					name,
						    email,
                            ngaysinh
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$email',
                            '$ngaysinh'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
                           echo "<div class='alert alert-info'>
                           <strong>Chúc mừng bạn đã đăng ký thành công!!.</strong>
                           </div>";
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
	<form action="register.php" method="get" class="col-md-6" style="border:4px double #0080FF">
        <div style="background-color: #0080FF;font-size: 25px" >
            <center><p ><b>Đăng Ký Thành Viên!</b></p></center>
        </div>
        <div class="form-group">
            <label><b> Username</b></label>
            <input type="text" id="username" name="username">
        </div>
        <div class="form-group">
            <label><b> Password</b> </label>
            <input type="password" id="pass" name="pass">
        </div>
		<div class="form-group">
            <label><b> Họ Tên </b></label>
            <input type="text" id="name" name="name">
        </div>
		<div class="form-group">
            <label><b> Email</b> </label>
            <input type="text" id="email" name="email">
        </div>
        <div class="form-group">
            <p><b>Ngày sinh: </b></p>
            <div class="row" name="ngaysinh">         
                <div class="col-xs-4 col-md-4">
                    <select class="form-control input-sm" name="day" >     
                        <option value="Day">Ngày</option>         
                        <?php 
                            $d = range(31, 1);
                            foreach ($d as $day) {
                                echo '<option value='.$day.'>'.$day.'</option>';
                            } 
                        ?> 
                    </select> 
                </div> 
                <div class="col-xs-4 col-md-4"> 
                    <select class="form-control input-sm" name="month">              
                        <option value="Month">Tháng</option>      
                        <?php
                            $m = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                            foreach ($m as $month) {
                                echo '<option value='.$month.'>'.$month.'</option>';
                            }
                        ?>   
                    </select> 
                </div> 
                <div class="col-xs-4 col-md-4"> 
                  <select class="form-control input-sm" name="year">              
                        <option value="Year">Năm</option>   
                        <?php 
                            $years = range(2018, 1940);
                            foreach ($years as $yr) {
                                echo '<option value='.$yr.'>'.$yr.'</option>';
                            } 
                        ?>               
                    </select> 
                </div> 
            </div>
        </div>
		<div class="form-group">
			<input type="submit" name="btn_submit" value="Đăng Ký">
                            
		</div>
 
		
 
	</form>
    </div>
	</body>
	</html>
    <?php include("./includes/footer.php"); ?>