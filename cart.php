<?php
session_start();
    if(isset($_SESSION['user']))
    {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Cart</title>
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
            
        ?>
        <a href="item.php"><div class="cartitems">
            <img alt="image">
            <div class="dis"><h3>short item discription</h3></div>
        </div>
        </a>
        <a href="item.php"><div class="cartitems">
                <img alt="image">
                <div class="dis"><h3>short item discription</h3></div>
        </div>
        </a>
        <a href="item.php"><div class="cartitems">
                <img alt="image">
                <div class="dis"><h3>short item discription</h3></div>
            </div>
        </a>
        <a href="item.php"><div class="cartitems">
                <img alt="image">
                <div class="dis"><h3>short item discription</h3></div>
        </div>
        </a>
        
    </div>

     <!-- footer -->
     <div class="foot">
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