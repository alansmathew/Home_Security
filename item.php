<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Item</title>
    <style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 500;
        background-image: none;
        font-size:14px;
        /* background-color: bisque; */
    }
    .margin{
        position: relative;
        margin:auto;
        width:1230px;
        /* background-color: white; */
        /* height:150vh; */
    }
    .image{
        position:relative;
        margin:20px;
        width:600px;
        height:650px;
        float:left;
        /* background-color: rgb(173, 150, 150); */
    }
    .image img{
        width:480px;
        height:550px;
        float:right;
    }
    .temp{
        margin:20px;
        position:absolute;
        width:100px;
        height:600px;
        /* background-color: blue; */
    }
    .temp img{
        margin-top:10px;
        width:100px;
        height:100px;
        /* background-color: aqua; */
        border:1px solid rgba(0, 0, 0, 0.3); 
    }
    .temp img:hover{
        border:1px solid rgba(0, 0, 0, 0.952);
        box-shadow: rgba(0, 0, 0, 0.5) .4px .4px 10px;
    }
    .dis{
        margin:20px;
        float:right;
        width:550px;
        height:900px;
        /* background-color: blueviolet; */
    }
    .opt{
        cursor: pointer;
        margin:20px;
        display:block;
        position:relative;
        float:left;
        color:white;
        border:none;
        width:280px;
        height:55px;
        font-size: 16px;
        border-radius: 3px;
        box-shadow:rgba(0, 0, 0, 0.5) .4px .4px 4px;
        background-color: rgb(248,100,44);
    }
    .opt:hover{
        box-shadow:rgba(0, 0, 0, 0.685) .4px .4px 6px;
    }
    .mainpart{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 500;
        margin:20px;
        width:510px;
        /* height:70px; */
        /* background-color: aqua; */
    }
    h2{
        font-size:34px;
    }
    hr{
        margin:2px;
        border:1px solid rgba(66, 64, 64, 0.5);
    }
    .price{
        margin:20px;
        /* background-color: aqua; */
        height:50px;
    }
    .pname{
        color:rgb(5, 95, 5);
    }
    .pr{
        margin-top:10px;
        color:brown;
        font-size: 30px;
    }
    .overviewpart{
        position: relative;
        margin-top:150px;
        margin-left:20px;
        /* margin:20px; */
        height:200px;
        /* background-color: tomato; */
    }
    .head{
        float:left;
        display: flex;
        align-items: center;
        position:absolute;
        width:130px;
        height:100%;
        color:gray;
    }
    .discrib{
        position:absolute;
        right:0px;
        width:380px;
        height:200px;
        display:flex;
        align-items: center;
        letter-spacing:1px;
        text-align: left;
        /* background-color: blue; */
    }

    .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        margin: 70px auto;
        padding: 30px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }

    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .popup .close:hover {
        color: #06D85F;
    }

    .popup .content {
        max-height: 30%;
        overflow: auto;
    }

    .content img{
        width:100px;
        height:100px;
        position:absolute;
        top:20px;
        right:150px;
        transition: all 10s ease-in;
    }
    </style>
</head>
<body>
         <!-- navigator -->
         <div id="nav">
                <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
                </a>
                <?php
                    if(isset($_SESSION['user']))
                    {
                        echo '<a href="">'.$_SESSION['user'].'</a>';
                        echo '<a href="cart.php">Bag</a>';
                        echo '<a href="logout.php">Logout</a>';
                    }
                    else{
                        echo '<a href="reg.php">Sign up</a>';
                        echo '<a href="login.php">Sign in</a>';
                    }
                ?>
        </div>
         <!-- navigator -->
        <?php 
            $item=$_GET['id'];
            $_SESSION["item"]=$item;
            $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
            $sql="select item_seller_name ,item_discription,item_main_image,item_cost,item_name from tbl_items where item_id=$item";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
        ?>
     <div class="margin" style="margin-top:100px;">
            <div class="image">
                    <img src="images/<?php echo $row['item_main_image']?>"/>
                    <div class="temp">
                        <?php
                            $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
                            $item=$_GET['id'];
                            $qu="select image_name from tbl_item_images where item_id='$item'";
                            $result2=mysqli_query($con,$qu);
                            while($r=mysqli_fetch_array($result2))
                            {
                                echo '<img src="images/'.$r['image_name'].'">';
                            }
                        ?>
                    </div>
            </div>
    <!-- image section end  -->
            <div class="dis">
                <div class="mainpart">
                    <h2><?php echo $row['item_name']; ?></h2>
                    <p class="seller">By <?php echo $row['item_seller_name']?> </p>
                </div>
                <hr>
                <div class="price">
                    <div class="pname">Special Price including all tax's</div>
                    <div class="pr">
                        $<?php echo $row['item_cost']; ?>
                    </div> 
                </div>
                <div class="overviewpart">
                    <div class="head">
                            Discription
                    </div>
                    <div class="discrib">
                        <?php
                            echo $row['item_discription'];
                        ?>
                    </div>
                </div>
        </div>
        <!-- discription ends here -->
        
        <!-- <a href="purchase.php"><button class="opt" >Buy Now</button></a> -->
        <?php
        if(isset($_SESSION['user']))
        {
            ?>
            <button class="opt" style="background-color:rgb(253,158,40)">Add to Wishlist</button>
            <button class="opt" onclick="purchase()">Buy Now</button>
            <?php
        }
        else{
            ?>
                <a href="#popup1"><button class="opt" style="background-color:rgb(253,158,40)">Add to Wishlist</button>
                <button class="opt" >Buy Now</button></a>
            <?php
        }
        ?>
                <div id="popup1" class="overlay">
	                <div class="popup">
		                <h2>Not yet a user ?</h2>
		                <a class="close" href="#">&times;</a>
		                <div class="content">
			                you can either sign in or sign up here <img src="images/arraw.gif">
		                </div>
	                </div>
                </div>
    </div>
     <div class="foot">
            <div class="ftnote">
                This website is created for study purpose only<br>
                No &copy; reserved ! 
            </div>

        </div>
    <script>
        function purchase(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "purchase.php", true);
            xmlhttp.send();
        }
    </script>
</body>
</html>