<?php
    session_start();
    $con=mysqli_connect("localhost","root","","project") or die("failed");
    $item=$_GET["id"];
    // $item=$_POST['val'];
    // $item=$_SESSION["item"];
    $regid=$_SESSION['reg_id'];
    $sql="insert into tbl_purchase (reg_id,item_id) values('$regid','$item')";
    mysqli_query($con,$sql);
?>