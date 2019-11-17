<?php
session_start();
    if(isset($_SESSION['user']))
    {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" <?php echo time(); ?> rel="stylesheet" type="text/css" />
    <title>Cart</title>
    <style>
        body {
            background-image: none;
        }
        h2{
            color:gray;
            font-size: 18px;
        }
.cartitems{
    margin:10px;
    padding: 10px;
    width:900px;
    height:250px;
    border-bottom: 1px solid rgba(0, 0, 0,.3);
    /* background-color: rgba(94, 91, 90, 0.228);  */
    float: left;
    display: block;
}
.cartitems img{
    float: left;
    border-radius: 20px 0px 0px 20px;
    width:250px;
    height: 250px;
    /* border:1px solid black; */
    /* background-color: azure; */
}
.cartitems img:hover{
    border-bottom: 1px solid rgba(0, 0, 0, 1);
}
.cartitems:hover{
    border-bottom: 1px solid rgba(0, 0, 0, 1);
}
.dis{
    float: left;
    width:650px;
    height: 250px;
    background-color:rgba(255, 255, 255, 0);
    /* border-radius: 2px 20px 20px 0px; */
}
.foot{
    position:absolute;
    bottom: 0px;
}
    </style>
</head>
<body>
    <!-- navigator -->
    <div id="nav">
                <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
                </a>
                <?php
                    echo '<a href="">'.$_SESSION['user'].'</a>';
                    echo '<a href="cart.php">Bag</a>';
                    echo '<a href="logout.php">Logout</a>';
                ?>
        </div>
     <!-- navigator -->

    <div class="margin" style="margin-top: 100px;">
        <div class="checkout"> final checkout block</div>
        <?php
            $reg_id=$_SESSION["reg_id"];
            $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
            $sql="select * from tbl_purchase where reg_id='$reg_id'";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result))
            {
                $item_id=$row["item_id"];
                $q="select * from tbl_items where item_id='$item_id'";
                $resulti=mysqli_query($con,$q);
                $rowi=mysqli_fetch_array($resulti);
                $image="images/".$rowi['item_main_image'];
                ?>
                    <a href="item.php?id=<?php echo $item_id ?>">
                        <div class="cartitems">
                        <img src="<?php echo $image ?>">
                        <div class="dis"><h2 style="margin-left:20px;"><?php echo $rowi['item_name'] ?></h2></div>
                        </div>
                    </a>
                <?php
            }

        ?>        
    </div>

     <!-- footer -->
     <div class="foot" >
            <div class="ftnote">
                This website is created for study purpose only<br>
                No &copy; reserved ! 
            </div>

        </div>
</body>
</html>

<?php
    }    
    else{
        header("location:home.php");
}