<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Home Security</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <style>
            body{
                background-color:white;
                background-image:none;
            }
        .margin{
            top:300px;
            width:1230px;
            margin:auto;
            background-color:white;
        }
        .item_class{
            position:relative;
            display: block;
            width:1200px;
	        /* background:rgba(223, 223, 223, 0.378); */
	        float:left;
	        margin:10;
            padding:20;    
        }  
        .box{
            position:relative;
            height:390px;
            width:271px;
            margin:24px;
            margin-right:0;
            float:left;
        }
        .box:hover{
            box-shadow: 3px 3px 10px rgba(34, 34, 34, 0.233);
        }
        .mn{
            color:rgba(175, 42, 42, 0.926);
            float:left;
            display: block;
            padding: 5px;
            font-size: 18px;
            width:100%;
        }
        .itname{
            width: 100%;
            padding:5px;
            color: rgb(11,	25,	46);
            font-size: 16px;
            float: left;
            display: block;
        }
        .ct{
            font-size: 16px;
            position: absolute;
            display:block;
            bottom: 0px;
            height: 34px;
            width: 100%;
            color:black;
            background-color: rgba(245, 181, 84, 0.755);
            border-radius: 5px;
            border: solid rgba(40, 40, 40, 0.358) 1px;
        }
        .ct:hover{
            border:solid black 1px;
        }
        #nav{
            font-family:Andale Mono;
            position:sticky;
            z-index:1;
            top:0px;
            width:96.45%;
            background-color:rgb(11,25,	46);
            text-align: center;
        }
        #main{
            position: relative;
            background-color: rgb(11,25,46);
            width:100%;
            height:680px;
            display: block;
        }

        sup{
            z-index: -1;
            border-radius: 50%;
            padding:4px;
            position:relative;
            background-color:red;
        }

        </style>
    </head>
    <body>

        <div id="main">
            <div class="container">
                <h1> Home Security</h1>
                <h2>Prevention is better than cure..</h2>
            </div>  
        </div>
         <!-- navigator -->
        <div id="nav">
                <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
                </a>
                <?php
                    if(isset($_SESSION['user']))
                    {
                        $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
                        $user=$_SESSION['user'];
                        $sql="select reg_id from tbl_reg where login_id=(select login_id from tbl_login where username='$user')";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        $_SESSION['reg_id']=$row['reg_id'];

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
                        echo '<a href="wishlist.php" style="position:relative"><sup>'.$_SESSION['wishlistcount'].'</sup>Wishlist</a>';
                        echo '<a href="cart.php" style="position:relative"><sup>'.$_SESSION['bagcount'].'</sup>Bag</a>';
                        echo '<a href="logout.php">Logout</a>';
                    }
                    else{
                        echo '<a href="reg.php">Sign up</a>';
                        echo '<a href="login.php">Sign in</a>';
                    }
                ?>
        </div>
    <div class="margin" style="overflow: hidden;">
    <div class="item_class">
    <?php
        $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
        $sql="select item_id,item_main_image,item_cost,item_name from tbl_items";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <div class="box">
                <a href="item.php?id=<?php echo $row['item_id']; ?>">
                    <img src="images/<?php echo $row['item_main_image'];?> "height=271px width=271px>
                    <div class="mn">$<?php echo $row['item_cost']; ?></div>
                    <div class="itname"><?php echo $row['item_name']; ?></div>
                </a>
                <?php 
                if(isset($_SESSION['user'])){
                    ?>
                        <button class="ct" onclick="purchase(<?php echo $row['item_id'] ?>)">Add to bag </button>
                    <?php
                }
                ?>
            </div>
        <?php
        }
    ?>
    </div> 
    </div>
    <div class="tick" id="tic" >
        <div class="check icon"></div>
    </div>
    <div class="foot">
            <div class="ftnote">
                This website is created for study purpose only<br>
                No &copy; reserved ! 
            </div>
    </div>
        <script>
        function diss(){
            document.getElementById("tic").style.display="none";
        }
        var xmlhttp = new XMLHttpRequest();
        function purchase(x){
            var url="purchase.php?id="+x;
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            document.getElementById("tic").style.display="block";
            setTimeout(diss, 700);
        }
        </script>
    </body>
</html>