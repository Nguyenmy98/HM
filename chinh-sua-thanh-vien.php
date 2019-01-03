<?php
    include("./includes/header.php");
    include("./includes/menu_login.php");
    
?>
<br>
<html>
	<head>
		<title>Form thêm thành viên</title>
	</head>
	<body>
		<?php
        require_once("lib/connection.php");
        
		if (isset($_GET["btn_submit"])) {
            
              //lấy thông tin từ các form bằng phương thức POST
            $id = $_GET["id"];
  			$username = $_GET["username"];
            $name = $_GET["name"];
            $email = $_GET["email"];
            $level = $_GET["level"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($id == "" || $username == "" || $name == "" || $email == ""|| $level == "") {
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
	    				$sql = "INSERT INTO quan-ly-users(
                            id,
	    					username,
	    					name,
						    email,
                            level
	    					) VALUES (
                            '$id',
	    					'$username',
						    '$name',
	    					'$email',
                            '$level'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
                           echo "<div class='alert alert-info'>
                           <strong>Chúc mừng bạn đã thêm thành công!!.</strong>
                           </div>";
				  }
		   }
           </div>
          </div>
	</body>
	</html>
    <?php include("./includes/footer.php"); ?>




 