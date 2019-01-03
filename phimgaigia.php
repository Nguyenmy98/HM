<?php
    include("./includes/header.php");
?>
<br>
<div id="phim" style="background-color: whitesmoke">
<?php
    include("lib/connection.php");                
    $sql = "select * from phim where id='5' ";                
    $result=mysqli_query($conn,$sql) or die(mysql_error());
    while($row=mysqli_fetch_array($result))
{?>   
    <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-6">
            
            <video src="<?php echo $row["video"] ?>"width="900" height="550" controls>
                Your browser does not support the <video> element. 
            </video>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <img src="./style/img/<?php echo $row["image"] ?>" alt="" width="270" height="300">
            <div class ="caption">
                <br>
                <p>                    
                  <centrer><a href="#" class="btn btn-danger ">Đặt vé</a></center>
                </p>
            </div> 
        </div>
        <div class="col-md-6" >
            <h3><b><?php echo $row["tenphim"] ?></b></h3> <br>
            <p><?php echo $row["ChiTiet"] ?> </p> <br>
    </div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h4><b>Tóm tắt</b></h4>
            <p><?php echo $row["TomTat"] ?></p>
        </div>
        
    </div>
    

</div>



<?php 
}

    include("./includes/footer.php");
?>