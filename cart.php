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

.cartitems{
    transition: transform .2s; 
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
}
.cartitems:hover{
    transform: scale(1.04);
    border-bottom: 1px solid rgba(0, 0, 0, 1);
}
.cartitems button{
    margin-left:20px;
}
.dis{
    margin-top:40px;
    float: left;
    width:650px;
    height: 250px;
    background-color:rgba(255, 255, 255, 0);
    /* border-radius: 2px 20px 20px 0px; */
}
.seller{
    margin:20px;
    font-size: 13px;
    color:rgb(11,105,33);
}
.more{
    margin:20px;
    font-size: 10px;
    color:black;
}
.head{
    float: left;
    width:75%;
}
h3{
    margin-top:50px;
    font-size:25px;
    margin-bottom: 0px;
}
hr{
    margin:0px;
    width:76%;
}
h2{
    color:rgb(29,96,176);
    font-size: 18px;
}
.pr{
    position:relative;
    right:40px;
    color:brown;
    font-size:20px;
    float:right;
    width:50px;
}
p{
    width:76%;
    font-size:14px;
    letter-spacing:.3px;
    word-spacing: 2px;
}
.toppart{
    color:green;
    padding-left: 20px;
    text-align: justify;
}
.bottompart{
    position:absolute;
    height:67%;
    width:100%;
    bottom: 0px;
    background-color: rgb(241,241,241);
    border-top:1px solid rgba(36, 36, 36, 0.192);
}
.checkout{
    position:relative;
    border-radius: 10px;
    margin-top:120px;
    float:right;
    width:280px;
    height:250px;
    box-shadow: 1px 1px 8px 1px rgba(206, 204, 201, 0.301);
    background-color: white;
    border:1px solid rgba(36, 36, 36, 0.192);
}
.bottompart b{
    float:left;
    margin-top:20px;
    margin-left:15px;
    font-size:large;
}
.bottompart button{
    background-color: rgba(235,185,94,.8);
    width:90%;
    height:35px;
    margin-top:55px;
    border:1px solid rgba(10, 10, 10, 0.431);
    border-radius: 5px;
    font-size:15px;
    color:black;
}
.bottompart button:hover{
    background-color: rgba(235,185,94,1);
}
.foot{
    position: relative;
}

    </style>
</head>
<body>
    <!-- navigator -->
    <div id="nav">
                <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
                </a>
                <?php
                // no of items in bag 

                $reg_id=$_SESSION["reg_id"];
                $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
                $s="select count(item_id) from tbl_purchase where reg_id='$reg_id'";
                $r=mysqli_query($con,$s);
                $ro=mysqli_fetch_array($r);
                $_SESSION['bagcount']=$ro['count(item_id)'];
                // ------------------------
                 // no of items in wishlist

                 $reg_id=$_SESSION["reg_id"];
                 $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
                 $s="select count(item_id) from tbl_wishlist where reg_id='$reg_id'";
                 $r=mysqli_query($con,$s);
                 $ro=mysqli_fetch_array($r);
                 $_SESSION['wishlistcount']=$ro['count(item_id)'];
                 // ------------------------
                
                 echo '<a href="">'.$_SESSION['user'].'</a>';
                 if(!$_SESSION['wishlistcount']>0)
                 {
                     echo '<a href="wishlist.php">Wishlist</a>';
                 }
                 else{
                     echo '<a href="wishlist.php" style="position:relative"><sup>'.$_SESSION['wishlistcount'].'</sup>Wishlist</a>';
                 }
                 if(!$_SESSION['bagcount']>0)
                 {
                     echo '<a href="cart.php">Bag</a>';
                 }
                 else{
                     echo '<a href="cart.php" style="position:relative"><sup>'.$_SESSION['bagcount'].'</sup>Bag</a>';
                 }
                 
                 echo '<a href="logout.php">Logout</a>';
                ?>
        </div>
     <!-- navigator -->

    <div class="margin" style="margin-top: 100px;">
        <div class="checkout"> 
            <div class="toppart">
                <p>Part of your order qualifies for FREE Delivery. </p>
            </div>
            <div class="bottompart">
            <!-- // total cost --------------------------------- -->
            <?php
            
                $reg_id=$_SESSION["reg_id"];
                $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
                $sql="select count(item_id) from tbl_purchase where reg_id='$reg_id'";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($result);
                $l="select sum(item_cost) from tbl_items where item_id in(select item_id from tbl_purchase where reg_id='$reg_id')";
                $result=mysqli_query($con,$l);
                $row=mysqli_fetch_array($result);
                $total=$row['sum(item_cost)'];
            ?>
            <!-- --------------------------------- -->
                <b> Subtotal(<?php echo $_SESSION['bagcount'] ?> items): <i style="color:brown">$ <?php echo $total ?> </i></b>

               <center> <a href="update.html"><button > Proceed to by </button> </a></center>
            </div>

        </div>
        <div class="head"><h3>Shopping Cart</h3><br></div>
        <hr>
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
                <div class="cartitems">
                <a href="item.php?id=<?php echo $item_id ?>"><img src="<?php echo $image ?>">
                    <div class="dis"><h2 style="margin-left:20px;"><?php echo $rowi['item_name'] ?></h2>
                    <div class="seller">Sold by <?php echo $rowi['item_seller_name']?></div>
                    <div class="more">Click here to learn more</div></a>
                    <div class="pr">$<?php echo $rowi["item_cost"]?></div>
                    <a href="delete.php?id=<?php echo $item_id ?>"><button>Delete</button></a>
                    <a href="deleteupdate.php?id=<?php echo $item_id ?>"><button>Add to wish list and delete form bag</button></a>
                </div>
        </div>
                    
                <?php
            }
        ?> 
        <p>The price and availability of items are subject to change. The shopping cart is a temporary place to store a list of your items and reflects each item's most recent price. Do you have a promotional code? We'll ask you to enter your claim code when it's time to pay.</p>       
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