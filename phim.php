<?php
    include("./includes/header.php");
?>
    <br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
        <a href="#phimdangchieu" class="btn btn-info" style="font-size: 25px">Phim đang chiếu</a> 
        <a href="#phimsapchieu" class="btn btn-info" style="font-size: 25px">Phim sắp chiếu</a>
        </div>
    </div>
    <br> <br>

   
<div id="phimdangchieu">
    <center><h2><b>--PHIM ĐANG CHIẾU--</b></h2> </center>
    <br><br>
    <div class="row">
        <div class="col-md-4"> 
            < <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='1' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="phimnguoinhen.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
        </div>
        <div class="col-md-4"> 
            <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='2' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="phimRalph.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
        </div>
        <div class="col-md-4"> 
            <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='3' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="phimcomaytuthan.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"> 
        <?php
                    include("lib/connection.php");                
                    $sql = "select * from phim where id='7' ";                
                    $result=mysqli_query($conn,$sql) or die(mysql_error());
                    while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimparkhangseo.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
        </div>
        <div class = "col-md-4">
        <?php
                    include("lib/connection.php");                
                    $sql = "select * from phim where id='4' ";                
                    $result=mysqli_query($conn,$sql) or die(mysql_error());
                    while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimmatvu.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
        </div>
        <div class = "col-md-4">
            <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='5' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="phimgaigia.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
        </div>
    </div>
</div>

<br>
<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
        <a href="#phimdangchieu" class="btn btn-info" style="font-size: 25px">Phim đang chiếu</a> 
        <a href="#phimsapchieu" class="btn btn-info" style="font-size: 25px">Phim sắp chiếu</a>
        </div>
</div>
    <br> <br>


<div id="phimsapchieu">
    <center><h2><b>--PHIM SẮP CHIẾU--</b></h2> </center>
    <br><br>
    <div class="row">
        <div class="col-md-4"> 
        <?php
                    include("lib/connection.php");                
                    $sql = "select * from phim where id='8' ";                
                    $result=mysqli_query($conn,$sql) or die(mysql_error());
                    while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimmarypoppins.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
        </div>
        <div class="col-md-4"> 
            <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='9' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="./phimbumblebee.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
        </div>
        <div class="col-md-4"> 
            <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='10' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="phimdragon.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4"> 
             <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='11' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="phimcaptain.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
        </div>
        <div class = "col-md-4">
            <?php
                include("lib/connection.php");                
                $sql = "select * from phim where id='12' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>            
                <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                    <div class ="caption">
                        <h4><?php echo $row["tenphim"] ?></h4>
                        <p>
                            <a href="phimiceman2.php" class="btn btn-danger">Chi tiết</a> 
                            <a href="#" class="btn btn-danger">Đặt vé</a>
                        </p>
                    </div>
                </center>
        </div>
        <div class = "col-md-4">
            
        </div>
    </div>
</div>
           


<?php 
     }}}}}}}}}}}
    include("./includes/footer.php");
    ?>