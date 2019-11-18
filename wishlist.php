<?php
session_start();
    if(isset($_SESSION['user']))
    {  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wishlist</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <style>
        body{
            background-image: none;
        }
        .box{
            position:relative;
            height:500px;
            width:375px;
            margin:25px;
            margin-right:0;
            float:left;
            border-right:1px solid rgba(100, 100, 100, 0) ;
            border-left:1px solid rgba(100, 100, 100, 0) ;
            /* background-color: black; */
        }
        .box:hover{
            border-right:1px solid rgba(0, 0, 0, 0.205) ;
            border-left:1px solid rgba(0, 0, 0, 0.205) ;
            /* box-shadow: 3px 3px 10px rgba(34, 34, 34, 0.233); */
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
    </style>
</head>
<body>
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

    <center><h2 style="margin-top:150px;"><?php echo $_SESSION['user']?>'s wishlist</h2></center><br>
    <hr>
    <div class="margin">
            <?php 
                $reg_id=$_SESSION["reg_id"];
                $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
                $sql="select * from tbl_wishlist where reg_id='$reg_id'";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result))
                {
                    $item_id=$row["item_id"];
                    $q="select * from tbl_items where item_id='$item_id'";
                    $resulti=mysqli_query($con,$q);
                    $rowi=mysqli_fetch_array($resulti);
                    $image="images/".$rowi['item_main_image'];
                    ?>
                    <div class="box">
                        <a href="item.php?id=<?php echo $rowi['item_id']; ?>">
                            <img src="<?php echo $image ?>" height=375px width=375px>
                            <div class="mn">$<?php echo $rowi['item_cost']; ?></div>
                            <div class="itname"><?php echo $rowi['item_name']; ?></div>
                            </a>
                            <button class="ct" onclick="purchase(<?php echo $row['item_id'] ?>)">Add to bag </button>
                    </div>
                    <?php
                }  
                ?>
    </div>
    <div class="tick" id="tic">
            <div class="check icon"></div>
    </div>

    <div class="foot">
            <div class="ftnote">
                This website is created for study purpose only<br>
                No &copy; reserved ! 
            </div>
    </div>
</body>
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
</html>
<?php
    }    
    else{
        header("location:home.php");
}