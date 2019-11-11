<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Item</title>
    <style>
    h2{
        font-family:Herculanum;
        font-size:25px;
        color:rgba(46, 45, 45, 0.883);
        letter-spacing: 1px;
        margin:30px;
    }
    .pr{
        margin-top:30px;
        margin-left:30px;
        float:left;
        font-size: 18px;
    }
    .clr{
        margin-top:27px;
        margin-left:10px;
        float:left;
        color:brown;
        font-size: 20px;
        background-color:black;
    }
    .btn{
        font-size: 16px;
        height: 34px;
        color:black;
        background-color: rgba(245, 181, 84, 0.755);
        border-radius: 5px;
        border: solid rgba(40, 40, 40, 0.358) 1px;
        width:300px;
        margin-top:25px;
        margin-right:70px;
        float:right;
    }
    @font-face{
        font-family: Herculanum;
        src:url("fonts/Microsoft\ Sans\ Serif.ttf");
    }
    p{
        color:rgba(76, 76, 243, 0.733);
        margin:30px;
    }
    hr{
        border:1px solid rgba(160, 160, 160, 0.205);
        width:92%;
    }
    .dislist{
        border:1px solid black;
        border-radius:10px;
        box-shadow:orange 1px 1px 10px;
        padding:30px;
        font-family:Herculanum;
        font-size:15px;
        position:relative;
        float:left;
        margin:30px;
        width: 600px;
    }
    </style>
</head>
<body>
    <!-- navigator -->
    <div id="nav">
        <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
        </a>
        <a href="reg.php">Sign up</a>
        <a href="login.php">Sign in</a>
        <a href="cart.php">Bag</a>
</div>
     <!-- navigator -->

     <div class="margin" style="margin-top:100px;">
         <div class="itemimage">
             <?php 
                $item=$_GET['id'];
                $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
                $sql="select item_seller_name ,item_discription,item_main_image,item_cost,item_name from tbl_items where item_id=$item";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($result);
             ?>
             <img src="images/<?php echo $row['item_main_image']?>" width=400px height=500px/>
                <div class="tumb">
                    <img src="images/test.png" alt=""/>
                    <img src="images/test.png" alt=""/>
                    <img src="images/test.png" alt=""/>
                    <img src="images/test.png" alt=""/>
                    <!-- <h3>item images</h3> -->
                </div>
         </div>
         <div class="itemdis">
             <h2><?php echo $row['item_name']; ?></h2>
             <p>By <?php echo $row['item_seller_name']?> </p>
             <hr width="100%">
             <div class="pr">Price</div><div class="clr">$<?php echo $row['item_cost']; ?></div>
             <button class="btn">Buy now </button>
             <div class="dislist">
                <?php
                    echo $row['item_discription'];
                ?>
             </div>
         </div>
     </div>
     <div class="foot">
            <div class="ftnote">
                This website is created for study purpose only<br>
                No &copy; reserved ! 
            </div>

        </div>
    
</body>
</html>